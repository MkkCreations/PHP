<?php
require_once('./classVehicule.php');
require_once('./classDelit.php');

    class Infraction {
        private string $num;
        private Vehicule $vehicule;
        private Delit $delit;

        function __construct (string $num, $vehicule, string $delit) {
            $this->num = $num;
            $this->vehicule = $vehicule;
            $this->delit = $delit;
        }

        function getnum(): string {
            return $this->num;
        }
        function getvehicule(): string {
            return $this->vehicule;
        }
        function getdelit(): string {
            return $this->delit;
        }
        function setnum(string $num): void {
            $this->num = $num;
        }
        function setvehicule(string $vehicule): void {
            $this->vehicule = $vehicule;
        }
        function setdelit(string $delit): void {
            $this->delit = $delit;
        }

        function __toString(): string {
            $chaine = $this->num. ' -- '. $this->vehicule. ' '. $this->delit;
            
            return $chaine;
        }
    }
?>