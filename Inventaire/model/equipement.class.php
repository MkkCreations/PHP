
<?php
    export class Equipement {
        private $id_equipt;
        private $lib_equipt;
        private $commentaire;

        function __construct(string $id='', string $libelle='', string $commentaire='') {
            $this->id_equipt = $id;
            $this->lib_equipt = $libelle;
            $this->commentaire = $commentaire;
        }

        function getIdEquipt() {
            return $this->id_equipt;
        }

        function getLibEquipt() {
            return $this->lib_equipt;
        }

        function getCommentaire() {
            return $this->commentaire;
        }

        function setIdEquipt(string $id) {
            $this->id_equipt = $id;
        }

        function setLibEquipt(string $libelle) {
            $this->lib_equipt = $libelle;
        }

        function setCommentaire(string $commentaire) {
            $this->commentaire = $commentaire;
        }

        
    }

?>