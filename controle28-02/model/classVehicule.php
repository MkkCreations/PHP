<?php
    class Vehicule {
        private string $plaque;
        private $marque;
        private string $modele;

        function __construct (string $plaque, $marque, string $modele) {
            $this->plaque = $plaque;
            $this->marque = $marque;
            $this->modele = $modele;
        }

        function getPlaque(): string {
            return $this->plaque;
        }
        function getMarque(): string {
            return $this->marque;
        }
        function getModele(): string {
            return $this->modele;
        }
        function setPlaque(string $plaque): void {
            $this->plaque = $plaque;
        }
        function setMarque(string $marque): void {
            $this->marque = $marque;
        }
        function setModele(string $modele): void {
            $this->modele = $modele;
        }

        function __toString(): string {
            $chaine = $this->plaque. ' -- '. $this->marque. ' '. $this->modele;
            
            return $chaine;
        }
    }
?>