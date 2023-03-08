
<?php
    export class Salle {
        private $num_salle;
        private $lib_salle;
        private $etage;

        function __construct(string $num='', string $libelle='', string $etage='') {
            $this->num_salle = $num;
            $this->lib_salle = $libelle;
            $this->etage = $etage;
        }

        function getNumSalle() {
            return $this->num_salle;
        }

        function getLibSalle() {
            return $this->lib_salle;
        }

        function getEtage() {
            return $this->etage;
        }

        function setNumSalle(string $num) {
            $this->num_salle = $num;
        }

        function setLibSalle(string $libelle) {
            $this->lib_salle = $libelle;
        }

        function setEtage(string $etage) {
            $this->etage = $etage;
        }

        

        function __toString() {
            return $this->num_salle.' '.$this->lib_salle.' '.$this->etage;
        }
    }
?>