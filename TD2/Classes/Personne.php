<?php
    class Personne {
        private string $nom;
        private string $prenom;
        private int $age;
        private string $sexe;
        
        function __construct(string $nom, string $prenom, int $age, string $sexe) {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->age = $age;
            $this->sexe = $sexe;
        }
        function getNom(): string {
            return $this->nom;
        }
        function getPrenom(): string {
            return $this->prenom;
        }
        function getAge(): int {
            return $this->age;
        }
        function getSexe(): string {
            return $this->sexe;
        }
        function setNom(string $nom) {
            $this->nom = $nom;
        }
        function setPrenom(string $prenom) {
            $this->prenom = $prenom;
        }
        function setAge(int $age) {
            $this->age = $age;
        }
        function setSexe(string $sexe) {
            $this->sexe = $sexe;
        }

        function __toString(): string { 
            $chaine = $this->getNom() . " " . $this->getPrenom() . ", " . $this->getAge() . " ans, ";
            switch ($this->getSexe()) {
                case 'H':
                    $chaine .= "Homme";
                    break;
                case 'F':
                    $chaine .= "Femme";
                    break;
                default:
                $chaine .= "Inconnu";
                    break;
            }
            return  $chaine;
        }
    }
?>