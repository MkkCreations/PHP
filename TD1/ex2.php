
    <?php
        $tab = [
            'Bougdira' => ['sexe' => 'F', 'coleur' => 'jaune'],
            'Ginoux' => ['sexe' => 'M', 'coleur' => 'blue'],
        ];
    
        foreach ($tab as $cle => $valeur) {
            switch ($valeur['coleur']) { 
                case 'jaune':
                    $lesCouleur = 'chaudes';
                    break; 
                case 'blue' :
                    $lesCouleur = 'froides';
                    break; 
            }
            
            if ($valeur['sexe'] == 'F') {
                echo "<h1>Bonjour Mme $cle , vous aimez les couleurs $lesCouleur ().</h1>";
            }else {
                echo "<h1>Bonjour M $cle , vous aimez les couleurs $lesCouleur ().</h1>";
        }
    }
    ?> 
