<?php
    require_once('models/Model.php');

    class UsersModel extends Model {
        public function consultUser($login){
            $sql = " SELECT * FROM users WHERE email='".$login."' ";            
            $resultado = $this->select($sql);
            return $resultado;
        }

        public function create($cliente){

        }
    }
?>