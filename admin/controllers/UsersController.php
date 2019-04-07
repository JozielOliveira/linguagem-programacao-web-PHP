<?php 
    class UsersController {
        public function validateLogin(){
            $login = $_POST["email"];
            require("models/UsersModel.php");
            $User = new UsersModel();
            $result = $User -> consultUser ($login);

            if ($line = $result -> fetch_assoc()){
                if ($line["password"] == $_POST["password"]){
                    $_SESSION["login"] = $line["id"];
                    $_SESSION["name"] = $line["name"];

                    header("Location: index.php?c=m&a=i");
                } else {
                    $alert = "Senha Errada";
                    require "views/auth/login.php";
                }
            } else {
                $alert = "Não exite";
                require "views/auth/login.php";
            }
        }
    }
?>