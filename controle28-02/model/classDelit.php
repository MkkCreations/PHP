<?php
    class Delit {
        private string $code;
        private $designation;
        private int $tarif;

        function __construct (string $code, $designation, int $tarif) {
            $this->code = $code;
            $this->designation = $designation;
            $this->tarif = $tarif;
        }

        function getCode(): string {
            return $this->code;
        }
        function getDesignation(): string {
            return $this->designation;
        }
        function getTarif(): string {
            return $this->tarif;
        }
        function setCode(string $code): void {
            $this->code = $code;
        }
        function setDesignation(string $designation): void {
            $this->designation = $designation;
        }
        function setTarif(string $tarif): void {
            $this->tarif = $tarif;
        }

        function __toString(): string {
            $chaine = $this->code. ' -- '. $this->designation. ' -- '. $this->tarif. '€';

            return $chaine;
        }
    }
?>