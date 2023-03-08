<?php
    echo '<pre>';
    var_dump($_GET);
    echo '</pre>';
    include 'calculette.view.php';
    
    function operations(): int|float|null|string{
        if (isset($_GET['division']) && $_GET['valeur2'] == 0){
            return 'Division par 0 impossible';
        }
        if(isset($_GET['addition'])){
            return $_GET['valeur1'] + $_GET['valeur2'];
        }
        if(isset($_GET['soustraction'])){
            return $_GET['valeur1'] - $_GET['valeur2'];
        }
        if(isset($_GET['multiplication'])){
            return $_GET['valeur1'] * $_GET['valeur2'];
        }
        if(isset($_GET['division'])){
            return $_GET['valeur1'] / $_GET['valeur2'];
        }
        return null;
    }
?>