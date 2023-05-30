<!DOCTYPE html>
<html>
<head>
	<title>Konzultáció</title>
	<style>
		/* Global Styles */
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #E9F6EF;
		}

		/* Navigation Styles */
		nav {
			background-color: #3CB371;
			padding: 10px;
			text-align: center;
		}

		nav a {
			color: #fff;
			text-decoration: none;
			margin-right: 10px;
			font-weight: bold;
		}

		/* Main Content Styles */
		.container {
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
		}

		h2 {
			text-align: center;
			color: #3CB371;
		}

		.profile {
			display: flex;
			align-items: center;
			margin-bottom: 20px;
		}

		.profile img {
			width: 100px;
			height: 100px;
			border-radius: 50%;
			margin-right: 20px;
		}

		.profile p {
			margin: 0;
			font-weight: bold;
		}

		p {
			margin-bottom: 20px;
		}

		form.appointment {
			text-align: center;
		}

		label {
			display: block;
			margin-bottom: 10px;
			color: #3CB371;
		}

		input[type="text"],
		input[type="email"],
		input[type="date"] {
			width: 100%;
			padding: 5px;
			margin-bottom: 10px;
		}

		select {
			width: 100%;
			padding: 5px;
			margin-bottom: 10px;
		}

		input[type="submit"] {
			background-color: #3CB371;
			color: #fff;
			border: none;
			padding: 10px 20px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<nav>
		<a href="index.php">Kezdőlap</a>
		<a href="Tanacsado.php">Tanácsadók</a>
		<a href="login.php">Bejelentekezés</a>
		<a href="Register.php">Regisztráció</a>
		<a href="Kertészeti.php">Termékeink</a>
		<a href="coach-answer.php">Tanácsadói Q&A</a>
	</nav>

	<div class="container">
		<h2>Tanácsadóink</h2>
		<div class="profile">
			<img src="tanacsado.png" alt="Consultant Profile Picture" style="width: 100px; height: 100px; border-radius: 50%; margin-right: 20px;">
			<p style="margin: 0; font-weight: bold;">John Doe<br>Kertészeti Tanácsadó</p>
		</div>
		<p style="margin-bottom: 20px;">Kertészeti tanácsadónk, John Doe segít megválaszolni a mezőgazdasággal kapcsolatos kérdéseit. Ha időpontot szeretne egyeztetni Johnnal, kérjük, töltse ki az alábbi űrlapot, és ő a lehető leghamarabb felveszi Önnel a kapcsolatot.</p>
		<form action="appointment.php" method="post" class="appointment">
			<label for="name">Név:</label>
			<input type="text" id="name" name="name" required>
			
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>
			
			<label for="phone">Telefon:</label>
			<input type="text" id="phone" name="phone" required>
			
			<label for="appointment_date">Kinevezés időpontja:</label>
			<input type="date" id="appointment_date" name="appointment_date" required>
			
			<label for="appointment_time">Időpont kijelölése:</label>
			<select id="appointment_time" name="appointment_time"></select>
			
			<input type="submit" value="Submit Question" style="background-color: #3CB371; color: #fff; border: none; padding: 10px 20px; cursor: pointer;">
		</form>
	</div>
</body>
</html>
