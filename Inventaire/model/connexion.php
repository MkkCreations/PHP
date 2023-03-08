<?php

    export class DaseDeDonnees {
        private $db_config = array();
        private $db;

        public function __construct() {
            $this->db_config['SGBD'] = 'mysql';
            $this->db_config['HOST'] = 'localhost';
            $this->db_config['DB_NAME'] = 'DevWeb';
            $this->db_config['USER'] = 'root';
            $this->db_config['PASSWORD'] = ''; 
        }

        public function connect() {
            try {
                $this->db = new PDO($this->db_config['SGBD'].':host='.$this->db_config['HOST'].';dbname='.$this->db_config['DB_NAME'],
                $this->db_config['USER'], $this->db_config['PASSWORD'],
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                unset($this->db_config);
            } catch ( Exception $exception ) {
                die($exception->getMessage());
            }
        }

        public function getDb() {
            return $this->db;
        }

        public function execSQL(string $req, array $valeurs=[]) {
            $stmt = $this->db->prepare($req);
            $stmt->execute($valeurs);
            return $stmt;
        }
    }

?>