
<!DOCTYPE html>
<html>
<head>
	<title>Tanácsadói Q&A</title>
    <link rel="stylesheet" href="Q&A.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav>
		<a href="Kezdőlap.php">Kezdőlap</a>
		<a href="Tanacsado.php">Tanácsadók</a>
		<a href="login.php">Bejelentekezés</a>
        <a href="Register.php">Regisztráció</a>
        <a href="Kertészeti.php">Termékeink</a>
		<a href="coach-answer.php">Tanácsadói Q&A</a>
	</nav>
	
	<h1>Tanácsadói Q&amp;A</h1>
	<form method="post">
		<label for="name">Név:</label>
		<input type="text" id="name" name="name">

		<label for="email">Email:</label>
		<input type="text" id="email" name="email">

		<label for="question">Kérdések:</label>
		<textarea id="question" name="question"></textarea>

		<input type="submit" name="submit" value="Submit Question">
	</form>

	<h2>Questions</h2>
	<ul>
		<li>
			<div class="question">..Kérdés..?</div>
			<div class="answer">A növény terméshozamának javítása érdekében többféle dologgal is próbálkozhat, például a talaj pH-értékének beállításával, a megfelelő tápanyagok biztosításával, valamint a fény- és hőmérsékleti viszonyok optimalizálásával. Szívesen adnék konkrétabb tanácsokat, ha részletesebben tudsz beszámolni a konkrét helyzetedről.</div>
			<div class="questioner">Asked by: John Smith (j.smith@example.com)</div>
		</li>
		<li>
			<div class="question">Mi a legjobb módja annak, hogy megakadályozzam, hogy a kártevők kárt tegyenek a növényeimben?</div>
			<div class="answer">Többféle stratégiával is megelőzheti, hogy a kártevők kárt tegyenek a terményeiben, például természetes repellensekkel, vetésforgóval és megfelelő higiéniai gyakorlatokkal. A konkrétabb tanácsok ismét a kártevők típusától és az adott növénykultúrától függenek.</div>
