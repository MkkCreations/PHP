<!DOCTYPE html>
<html>
    <head>
        <title>Bonjour</title>
        <meta charset="utf8" />
        <style>
            * {
                padding: 0;
                margin: 0;
            }
            .ex {
                width: 100%;
                display: inline-block;
                text-align: center;
                border: 1px solid gray;
                padding: 5%;
                background-color: #bebea4;
            }
        </style>
    </head>
    <body>
        <?php
            echo "<div class='ex'>Ex 2</br>";
                include 'ex2.php';
            echo "</div>";
            echo "<div class='ex'>Ex 3</br>";
                include 'ex3.php';
            echo "</div>";
            echo "<div class='ex'>Ex 4</br>";
                include 'ex4.php';
            echo "</div>";
            echo "<div class='ex'>Ex 5</br>";
                include 'ex5.php';
            echo "</div>";
        ?> 
    </body>
</html>