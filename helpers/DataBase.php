<?php
    class DataBase {
        private function __contructor(){
            $this -> conn;
        }

        public function ini_conn () {
            
            // Atributos para conexão com banco
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "lpw_exemplo";
            
            // Inica conexão com banco
            try {
            
                $this->conn = new mysqli($servername, $username, $password, $dbname);
                return $this->conn;
            
            } catch (Exception $e) {
            
                echo "Conexão falhou: ". $e->getMessage(), "\n";
            
            }
            
        }

        public function end_conn () {
            // Encerra conexão com o banco de dados    
            $this -> conn -> close();
        
        }
}


?>