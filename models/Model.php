<?php 
    // Arquivo que contem a função de conexão com o banco de dados
    require_once('helpers/DataBase.php');

    class Model {
        public function __construct(){
            $this -> db = new DataBase();
        }

        public function select($sql){
            
            // Inicia conexão
                $banco = $this -> db ->ini_conn();
                
                    // Executa um select
                    $resultado = $banco -> query($sql);
                    
                    

            // Encerra a conexão com o banco
                $this->db -> end_conn();

            // Retorna a lista de itens requisitaso ao banco
                return $resultado;
        }
    }
?>