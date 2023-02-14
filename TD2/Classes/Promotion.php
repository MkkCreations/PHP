<?php
    require_once('Etudiant.php');

    class Promotion {
        private $libelle;
        private $etudiants = [];

        function __construct(string $libelle) {
            $this->libelle = $libelle;
        }
        function getLibelle(): string {
            return $this->libelle;
        }
        function setLibelle(string $libelle) {
            $this->libelle = $libelle;
        }
        function getEtudiant(string $nom, string $prenom): Etudiant {
            foreach ($this->etudiants as $etudiant) {
                if ($etudiant->getNom() == $nom && $etudiant->getPrenom() == $prenom) {
                    return $etudiant;
                }
            }
            return null;
        }
        function getEtudiants(): array {
            return $this->etudiants;
        }
        function getNombreEtudiants(): int {
            return count($this->etudiants);
        }
        function addEtudiant(Etudiant $etudiant) {
            $this->etudiants[] = $etudiant;
        }
        function afficheEtudiants() {
            foreach ($this->etudiants as $etudiant) {
                echo $etudiant->__toString() . "<br>";
            }
        }
        function getMoyenne(): float {
            $moyenne = 0;
            foreach ($this->etudiants as $etudiant) {
                $moyenne += $etudiant->getMoyenne();
            }
            if ($this->getNombreEtudiants() == 0) {
                return 0;
            } else {
                return number_format($moyenne / $this->getNombreEtudiants(), 2);
            }
        }
    }
?>