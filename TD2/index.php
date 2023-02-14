
<?php
    include ('./Classes/Promotion.php');
    $p1 = new Personne("Grand", "Pierre", 20, "H");
    $p2 = new Personne("Petit", "Georgette", 18, "F");
    $p3 = new Personne("Dupont", "Dominique", 19, "ø");

    $e1 = new Etudiant("Khaffou", "Mohamed", 22, "H");
    $e1->addNote(20);
    $e1->addNote(17);
    $e1->addNote(15);
    $e2 = new Etudiant("Doe", "John", 21, "H");
    $e2->addNote(10);
    $e2->addNote(12);
    $e2->addNote(14);
    $e3 = new Etudiant("Dwree", "Gertry", 41, "F");
    $e3->addNote(18);
    $e3->addNote(16);
    $e3->addNote(14);

    $promo = new Promotion("LP DAWIN");
    $promo->addEtudiant($e1);
    $promo->addEtudiant($e2);
    $promo->addEtudiant($e3);
    $promo->afficheEtudiants();
    echo "Moyenne de la promo : " . $promo->getMoyenne();
   
    echo "<style>th, td {border: 1px solid black; padding: 6px;}</style>
        <table> 
            <tr> 
                <th>Nom</th> <th>Prénom</th> <th>Age</th> <th>Sexe</th> <th>Moyenne</th>
            </tr> 
            ";
             foreach($promo->getEtudiants() as $key) {
                echo "<tr><td>" . $key->getNom() . "</td> <td>" . $key->getPrenom() . "</td> <td>" . $key->getAge() . "</td> <td>" . $key->getSexe() . "</td> <td>" . $key->getMoyenne() . "</td> </tr>";
            }
            echo
            "
             
            <tr> 
                <td colspan=4><b>Moyenne de la Promotion</b></td>
                <td>" . $promo->getMoyenne() ."</td>
            </tr> 
        </table>";

        echo $promo->getEtudiant("Doe", "John");
?> 