<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Madlibs - Er heerst paniek...</title>

    
    <link rel="stylesheet" href="css/style.css">
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
            <h1>Er heerst paniek...</h1>
            <form action="o_post.php" method="POST">
                <p>Welk dier zou je nooit als huisdier willen hebben?
                <input type="text" name="dier" autofocus></p>

                <p>Wie is de belangrijkste persoon in je leven?
                <input type="text" name="persoon"></p>

                <p>In welk land zou je graag willen wonen?
                <input type="text" name="land"></p>

                <p>Wat doe je als je je verveelt?
                <input type="text" name="verveling"></p>

                <p>Met welk speelgoed speelde je als kind het meest?
                <input type="text" name="speelgoed"></p>

                <p>Bij welke docent spijbel je het liefst?
                <input type="text" name="spijbel"></p>

                <p>Als je &euro; 100.000,- had, wat zou je dan kopen?
                <input type="text" name="geld"></p>

                <p>Wat is je favoriete bezigheid?
                <input type="text" name="bezigheid"></p>

                <button type="submit" name="submit">Verzenden</button>
            </form>
        </section>
    </div>
</body>
</html>