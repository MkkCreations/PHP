<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css"/>
        <title>calculette</title>
    </head>
    <body>
        <h1>Calculette</h1>
        <form action="calculette.php" method="get">
            <h2>Entrez deux entiers:</h2>
            <label for="valeur1">Valeur 1: </label>
            <input type="number" name="valeur1" id="valeur1" require/>
            <br><br>
            <label for="valeur2">Valeur 2: </label>
            <input type="number" name="valeur2" id="valeur2" require/>

            <h2>Choisissez une opération:</h2>

            <input type="submit" name="addition" value="addition"/><br>
            <input type="submit" name="soustraction" value="soustraction"/><br>
            <input type="submit" name="multiplication" value="multiplication"/><br>
            <input type="submit" name="division" value="division"/><br>
        </form>
        <div id="resultat">
            <?php
                echo "<center>", operations(), "</center>";
            ?>
        </div>
    </body>
</html>