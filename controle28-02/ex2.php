<?php
    function compteMots(string $text): array {
        $text = explode(' ', trim($text));
        $tab = array();
        
        foreach ($text as $valeur) {
            $count = 0;
            foreach ($text as $val) {
                if($valeur == $val) {
                    $count++;
                }
            }
            $tab[] = [$valeur, $count];
        }
        return $tab;
    }
    $arrayMots = compteMots("Bonjour je m'apple Mohamed Khaffou Khaffou");

    foreach ($arrayMots as $key) {
        foreach ($key as $val) {
            echo $val, "<br>";
        }
    }
?>