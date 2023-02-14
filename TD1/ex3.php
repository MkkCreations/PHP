<?php
    echo "<ul>";
    for ($i=1; $i<=10; $i++){
        if ($i % 2 == 0 && $i % 3 == 0) {
            echo "<li>$i est divisible par 2 et par 3</li>";
        } elseif ($i % 2 == 0) {
            echo "<li>$i est divisible par 2</li>";
        } elseif ($i % 3 == 0) {
            echo "<li>$i est divisible par 3</li>";
        } else {
            echo "<li>$i n'est divisible ni par 2 ni par 3</li>";
        }
    }
    echo "</ul>";

    $nb = 3;
    echo "nb = 3: ";
    while ($nb <= 50){
        echo $nb, " ";
        $nb *= 2;
    }
?>