<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <title>Form</title>
    </head>
    <body>
        <section>
            <h1>Formulaire</h1>
            <form action="form.php" method="post">
                <fieldset>
                    <legend>Informations personnelles</legend>
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom">
                    <br><br>
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" id="prenom">
                    <br><br>
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age">
                </fieldset>
                <br><br>
                <fieldset>
                    <legend>Compétences dans les langages informatiques</legend>
                    <label for="c">C</label>
                    <input type="checkbox" name="c" id="c">

                    <label for="c++">C++</label>
                    <input type="checkbox" name="c++" id="c++">

                    <label for="java">Java</label>
                    <input type="checkbox" name="java" id="java">

                    <label for="php">PHP</label>
                    <input type="checkbox" name="php" id="php">

                    <label for="python">Python</label>
                    <input type="checkbox" name="python" id="python">

                    <label for="typescript">TypeScript</label>
                    <input type="checkbox" name="typescript" id="typescript">
                    <lable for="cobol">Cobol</lable>
                    <input type="checkbox" name="cobol" id="cobol">
                    <lable for="aucun">Aucun</lable>
                    <input type="checkbox" name="aucun" id="aucun">
                </fieldset>
                <br><br>
                <fieldset>
                    <legend>Langue maternelle</legend>
                    <select>
                        <option value="français">Français</option>
                        <option value="anglais">Anglais</option>
                        <option value="espagnol">Espagnol</option>
                        <option value="allemand">Allemand</option>
                        <option value="italien">Italien</option>
                        <option value="chinois">Chinois</option>
                        <option value="japonais">Japonais</option>
                        <option value="russe">Russe</option>
                        <option value="arabe">Arabe</option>
                    </select>
                </fieldset>
        </section>
    </body>
</html>