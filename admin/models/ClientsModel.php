<?php
    require_once('models/Model.php');

    class ClientsModel extends Model {
        public function list(){
            $sql = "SELECT * FROM clientes";
            $resultado = $this->select($sql);
            $arrayCliente = array();
                    
            if($resultado->num_rows > 0){
                while($linha = $resultado->fetch_assoc()){
                    array_push($arrayCliente, $linha);
                }
            } else {
                echo "0 results";
            }
            return $arrayCliente;
        }   
        public function consultClient ($id) {
            $sql = "SELECT * FROM clientes WHERE idCliente = '".$id."';";
            $result = $this -> select($sql);
            return $result;
        }
        public function insertClient($cliente){
            $sql = "INSERT INTO clientes (name, endereco, email, telefone) VALUES ('".$cliente['name']."', '".$cliente['endereco']."', '".$cliente['email']."', '".$cliente['telefone']."' )";
            $resultado = $this->select($sql);  
            return $resultado;
        }

        public function updateClient ($cliente) {
            $sql = "UPDATE clientes SET name='".$cliente['name']."', endereco='".$cliente['endereco']."', email='".$cliente['email']."', telefone='".$cliente['telefone']."' WHERE idCliente='".$cliente['idClient']."'";
            $resultado = $this->select($sql);  
            return $resultado;
        }

        public function deleteClient ($id) {
            $sql = "DELETE FROm clientes WHERE idCliente='".$id."'";
            $resultado = $this->select($sql);  
            return $resultado;
        }

    }
?>
