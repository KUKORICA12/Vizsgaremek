<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Agriculture Website</title>
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
    <header>
      <img src="Logo.png" alt="Logo" id="logo">
      <h1>Üdvözöljük a Kerti gépek és kisokos weboldalunkon!</h1>
    </header>
    <nav>
      <a href="Tanacsado.php">Tanácsadók</a>
      <a href="Kertészeti.php">Termékek</a>
      <a href="coach-answer.php">Tanácsadói Q&A</a>
      <a href="Profil.php">A profilom</a>
    </nav>
    <main>
      <h1>Technikai platform létrehozása a mezőgazdasági szakemberek és rajongók számára</h1>
      <p>Célunk egy olyan átfogó platform létrehozása, amely összegyűjti az összes olyan mezőgazdasági eszközt és berendezést, amelyekkel kapcsolatban az iparág szakértői útmutatást adhatnak. Akár tapasztalt gazdálkodóról, akár kezdő gazdáról van szó, célunk, hogy segítsünk Önnek a lehető legtöbbet kihozni a rendelkezésre álló eszközökből, és szakértői tanácsokat kapjon hozzáértő személyektől.</p>
    </main>
    <footer>
      <h2>Üdvözöljük, <?php echo $row["name"]; ?>!</h2>
      <a href="logout.php">Kijelentkezés</a>
    </footer>
  </body>
</html>
