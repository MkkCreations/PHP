
<?php
    include './model/connexion.php';
    include './model/salle.class.php';

    export class SalleDAO {
        private $bd;
        private $select;

        public function __construct() {
            $this->bd = new DaseDeDonnees();
            $this->bd->connect();
            $this->select = $this->bd->execSQL("SELECT * FROM SALLE");
        }

        function insert(Salle $salle): void {
            $this->bd->execSQL("INSERT INTO SALLE (num_salle, lib_salle, etage) VALUES(?, ?, ?)", [':num' => $salle->getNumSalle(), ':libelle' => $salle->getLibSalle(), ':etage' => $salle->getEtage()]);
        }

        function delete(string $num): void {
            $this->bd->execSQL("DELETE FROM SALLE WHERE num_salle = ?", [':num' => $num]);
        }

        function update(Salle $salle): void {
            $this->bd->execSQL("UPDATE SALLE SET lib_salle = ?, etage = ? WHERE num_salle = ?", [':libelle' => $salle->getLibSalle(), ':etage' => $salle->getEtage(), ':num' => $salle->getNumSalle()]);
        }

        private function loadQuery (array $result) : array { 
            $salles = [];
            foreach($result as $row) {
                $salle = new Salle(); $salle->setNum($row['num_salle']); $salle->setLibelle($row['lib_salle']); $salle->setEtage($row['etage']); $salles[] = $salle;
            }
            return $salles;
        }

        function getAll(): array {
            return ($this->loadQuery($this->bd->execSQL($this->select)));
        }

        function getByNum (string $num) : Salle {
            $uneSalle = new Salle();
            $lesSalles = $this->loadQuery($this->bd->execSQL($this->select ." WHERE
            num_salle=:num", [':num'=>$num]) );
            if (count($lesSalles)>0) { $uneSalle = $lesSalles[0]; }

            return $uneSalle;
        }

        function existe (string $num) : bool {
            $req = "SELECT * FROM SALLE WHERE num_salle = :num";
            $res = ($this->loadQuery($this->bd->execSQL($req,[':num'=>$num])));

            return ($res != []);
        }

        function getTotalNbEquipt(string $numSalle) : int {
            $res = $this->bd->execSQL("SELECT SUM(qte) as total FROM CONTIENT WHERE num_salle=:numSalle", [':numSalle'=>$numSalle]);

            return (isset($res[0]['total']))?$res[0]['total']:0; 
        }
    }

?>