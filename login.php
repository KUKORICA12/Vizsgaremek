<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Hibás Jelszó'); </script>";
    }
  }
  else{
    echo
    "<script> alert('A felhasználó nincs regisztrálva'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bejelentkezés</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <h2>Bejelentkezés</h2>
    <form class="" action="" method="post" autocomplete="off">
      <label for="usernameemail">Felhasználó vagy Jelszó : </label>
      <input type="text" name="usernameemail" id = "usernameemail" required value=""> <br>
      <label for="password">Jelszó : </label>
      <input type="password" name="password" id = "password" required value=""> <br>
      <button type="submit" name="submit">Bejelentkezés</button>
    </form>
    <br>
    <a href="registration.php">Regisztráció</a>
  </body>
</html>