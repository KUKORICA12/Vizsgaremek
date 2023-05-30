<!DOCTYPE html>
<html>
<head>
	<title>Kertészeti katalógus</title>
    <link rel="stylesheet" href="style.css">	
</head>
<body>
    <div class="logo-container">
        <img src="Logo.png" alt="Logo" id="logo">
	<header>
		Kertészeti termékek
	</header>
	
	<nav>
		<a href="Index.php">Kezdőlap</a>
		<a href="Tanacsado.php">Szolgáltatásaink</a>
        <a href="Kertészeti.php">Termékeink</a>
		<a href="logout.php">Kijelentkezés</a>
		<a href="coach-answer.php">Tanácsadói Q&A</a>
		<a href="Tanacsado.php">Tanácsadók</a>


        <form action="logout.php" method="post">
            <input type="hidden" name="redirect" value="Index.html">
        </form>
       
	</nav>
	
	<main>
		<h1>Termék katalógus</h1>
		
		<div class="product">
			<img src="Kapa.jpg" alt="Product Image">
			<div class="product-details">
				<div class="product-title">Kapa</div>
				<div class="product-description">A kapa a föld megművelésére szolgáló, különféle alakú eszköz, mely a vasból vagy acélból készült, tulajdonképi kapából és a nyélből áll.</div>
			</div>
		</div>

	</main>
</body>
</html>
