<?php
    require_once('Personne.php');

    class Etudiant extends Personne {
        private $notes = [];
        
        function addNote(float $note) {
            $this->notes[] = $note;
        }
        function afficheNotes() {
            foreach ($this->notes as $note) {
                echo $note . ", ";
            }
        }
        function getMoyenne(): float {
            $moyenne = 0;
            foreach ($this->notes as $note) {
                $moyenne += $note;
            }
            if (count($this->notes) == 0) {
                return 0;
            } else {
                return number_format($moyenne / count($this->notes), 2);
            }
        }
        function __toString(): string {
            return parent::__toString() . ", " . $this->getMoyenne() . " de moyenne";
        }
    }
?>