<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./styles.css">

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
                    <br><br>
                    <label for="sexe">Genre:</label>
                    <?php
                        foreach($sexes as $cle=>$sexe) {
                            echo "<input type = 'radio' name = 'sexe' value='$cle' ";
                            if ($valeurs['genre']==$cle) echo "checked = 'checked'";
                            echo "/>$sexe";
                        }
                    ?>
                </fieldset>
                <br><br>
                <fieldset>
                    <legend>Compétences dans les langages informatiques</legend>

                    <?php     
                        foreach ($listeLangages as $unLangage){
                            echo "<input type='checkbox' name='langages[$unLangage]' value='$unLangage' ";
                            if (isset($valeurs['langages'][$unLangage])) echo 'checked ="checked"';
                            echo " /> $unLangage";
                        }
                    ?>
                </fieldset>
                <br><br>
                <fieldset>
                    <legend>Langue maternelle</legend>
                    <select name="langue" >
                    <?php
                        foreach ($langues as $uneLangue){
                            echo "<option value='$uneLangue'";
                            if ($uneLangue == $valeurs['langue']) {
                            echo 'selected="selected"';
                            }
                            echo ">", $uneLangue, "</option>";

                        }
                    ?>
                    </select>
                </fieldset>

                <button type="submit">Valider</button>
                <button type="reset">Reset</button>
            </form>
        </section>
        <div id="resultat">
            <?php
                if (!empty($valeurs['nom'])){
                    echo "<p>Bonjour " .$valeurs['prenom'] ." " .$valeurs['nom'] .", vous avez " .$valeurs['age'] ." ans.</p>";
                    $typeGenre = ($valeurs['sexe'] == "F")?"une femme": (($valeurs['sexe'] == "M")?"un homme":"de sexe inconnu");
                    echo "<p>Vous êtes $typeGenre.</p>";
                    echo "<p>Vous connaissez les langages suivants : ";
                    foreach ($valeurs['langages'] as $key => $value) {
                      echo $key, ' ';
                    }
                    echo "<p>Votre langue maternelle est : ". $valeurs['langue']."</p>";
                  }
            ?>
        </div>
    </body>
</html>