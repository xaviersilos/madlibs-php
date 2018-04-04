<?php

if (isset($_POST['submit'])) {
    $dier = $_POST['dier'];
    $persoon = $_POST['persoon'];
    $land = $_POST['land'];
    $verveling = $_POST['verveling'];
    $speelgoed = $_POST['speelgoed'];
    $spijbel = $_POST['spijbel'];
    $geld = $_POST['geld'];
    $bezigheid = $_POST['bezigheid'];

    if (empty($dier) && empty($persoon) && empty($land) && empty($verveling) && empty($speelgoed) && empty($spijbel) && empty($geld) && empty($bezigheid)) {
        $error = "Vul alstublieft alle velden in.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Madlibs - Er heerst paniek...</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1 id="titel">Madlibs</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="onkunde.php">Onkunde</a></li>
            </ul>
        </nav>
        <section>
            <h1>Er heerst paniek...</h1>
            <?php
                if (isset($error)) {
                    echo "<div class='error'>" . $error . "</div>";
                } else {
                    echo "<p>" . "Jij zou graag willen wonen in " . $land . " en als je je verveelt doe je graag " . $verveling . ".</p>";
                    echo "<p>" . "Het dier wat je nooit wilt hebben is/zijn " . $dier . ".</p>";
                    echo "<p>" . "Het belangrijkste persoon in jouw leven is " . $persoon . ".</p>";
                    echo "<p>" . "Toen je een kind was, speelde je graag met " . $speelgoed . ".</p>";
                    echo "<p>" . "Bij de docent " . $spijbel . " spijbelde je het liefst.</p>";
                    echo "<p>" . "Als je &euro; 100.000 had, zou je een " . $geld . " kopen.</p>";
                    echo "<p>" . "En je favoriete bezigheid is " . $bezigheid . ".</p>";
                }
            ?>
        </section>
    </div>
</body>
</html>