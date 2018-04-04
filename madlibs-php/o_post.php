<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Madlibs</title>
</head>
<body>
    <div class="container">
        <h1 id="title">Madlibs</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="onkunde.php">Onkunde</a></li>
            </ul>
        </nav>
		
		<section>
			<p>Er zijn veel mensen die niet kunnen <?php echo $_POST["do"]; ?>. Neem nou <?php echo $_POST["VIP"]; ?>.Zelfs met de hulp van een <?php echo $_POST["take"]; ?> of zelfs <?php echo $_POST["number"]; ?> kan <?php echo $_POST["VIP"]; ?> niet <?php echo $_POST["do"]; ?>.Dat heeft niet te maken met een gebrek aan <?php echo $_POST["good"]; ?>, maar met een te veel aan <?php echo $_POST["bad"]; ?>.Te veel <?php echo $_POST["bad"]; ?> leidt tot <?php echo $_POST["worse"]; ?> en dat is niet goed als je wilt <?php echo $_POST["do"]; ?>.Helaas voor <?php echo $_POST["VIP"]; ?>.</p>
		</section>
	
		<footer>
			
		</footer>
	</div>
</body>
</html>