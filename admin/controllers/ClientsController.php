<?php 
    // Arquivo onde tem a classe Controller
    require_once('controllers/Controller.php');
    require_once('models/ClientsModel.php');

    class ClientsController extends Controller {
        public function __construct(){
            if(!isset($_SESSION["login"])) {
                header("Location: ?c=m&a=l");
            }
            $this -> ClientModel = new ClientsModel();
        }
        public function index (){
            $resultado = $this->ClientModel->list();
            $this->templateData('views/client/listClient.php', $resultado);
        }
        
        public function insertClient (){
            $this -> template("views/client/createClient.php");
        }

        public function insertClientAction (){
            $cliente = array(
                "name" => $_POST['name'],
                "endereco" => $_POST['endereco'],
                "email" => $_POST['email'],
                "telefone" => $_POST['telefone']
            );
            $this -> ClientModel -> insertClient ($cliente);
            
            header("Location: ?c=c&m=i");
        }
        
        public function updateClient ($id){
            $resultado = $this->ClientModel->consultClient($id);
            $resultado = $resultado->fetch_assoc();
            $this->templateData('views/client/updateClient.php', $resultado);
        }

        public function updateClientAcion (){
            $cliente = array(
                "idClient" => $_POST['idClient'],
                "name" => $_POST['name'],
                "endereco" => $_POST['endereco'],
                "email" => $_POST['email'],
                "telefone" => $_POST['telefone']
            );
            $this -> ClientModel -> updateClient($cliente);

            header("Location: ?c=c&m=i");
        }

        public function deleteCliente (){
            if ($_GET['id'])
                $this-> ClientModel -> deleteClient($_GET['id']);
            header("Location: ?c=c&m=i");
        }
    }
?>