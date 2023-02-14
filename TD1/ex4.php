<?php
    $entiers10 = [1,2,3,4,5,6,7,8,9,10];
    foreach ($entiers10 as $key => $value) {
        echo $value . " ";
    }

    echo "</br>";
    
    $entiers50 = [
        [1,2, 3, 4, 5, 6, 7, 8, 9, 10],
        [11, 12, 13, 14, 15, 16, 17, 18, 19, 20],
        [21, 22, 23, 24, 25, 26, 27, 28, 29, 30],
        [31, 32, 33, 34, 35, 36, 37, 38, 39, 40],
        [41, 42, 43, 44, 45, 46, 47, 48, 49, 50]
    ];
    echo "<table style='border: 2px solid black;'>";
    foreach ($entiers50 as $key => $value) {
        echo "<tr>";
        foreach ($value as $val) {
            echo "<td style='border: 1px solid black; text-align: center; padding: 2px'> $val  </tb>";
        }
        echo "</tr>";
    }
    echo "</table></br>";
//-------------------------------------------------
    $personnage = [
        ['id_pers' => 1,
        'nom' => 'Skywalker',
        'prenom' => 'Luke',],
        ['id_pers' => 2,
        'nom' => 'Khaffou',
        'prenom' => 'Mohamed',],
        ['id_pers' => 3,
        'nom' => 'Bonjour',
        'prenom' => 'Aurevoir',],
    ];
    echo "<table style='border: 2px solid black;'> <tr><th>id_pers</th><th>nom</th><th>prenom</th></tr>";
    foreach ($personnage as $key => $value) {
        echo "<tr>";
        foreach ($value as $val) {
            echo "<td style='border: 1px solid black; text-align: center; padding: 2px'> $val  </tb>";
        }
        echo "</tr>";
    }
    echo "</table></br>";
//-------------------------------------------------
    $panier = ['Banane', 'Tomate', 'Fraise'];
    $panier[] = 'Cerise';
    $panier[0] = 'Kiwi';

    echo "<table style='border: 2px solid black;'>";
    foreach ($panier as $key => $value) {
        echo "<tr><td style='border: 1px solid black; text-align: center; padding: 2px'> $key </td>";
        echo "<td style='border: 1px solid black; text-align: center; padding: 2px'> $value </td></tr>";
    }
    echo "</table></br>";
//-------------------------------------------------
    $legumes = ['Courgette', 'Concombre', 'Haricotvert'];
    $achats = ['Fruits' => $panier, 'Legumes' => $legumes];

    echo "<table style='border: 2px solid black;'> <tr><th style='border: 1px solid black; text-align: center;'>Fruits</th><th style='border: 1px solid black; text-align: center;'>Légums</th></tr>";
    foreach ($achats as $key => $value) {
        echo "<td>";
        foreach ($value as $val) {
            echo "<p style='display: inline-block; border: 1px solid black; text-align: center; padding: 4px'> $val </p>";
        }
        echo "</td>";
    }
    echo "</table></br>";
//------------------------––-–––––-------------------
    echo "premier fruit : $panier[0] </br>";
    echo "derniere légume : ". end($legumes);

    echo "</br></br>";
//---------------------------------------------------
    foreach ($achats as $key => $value) {
        echo $key . ":</br>";
        sort($value);
        foreach ($value as $val => $jet) {
            echo $val . " : ". $jet . "</br>";
        }
    }
?>