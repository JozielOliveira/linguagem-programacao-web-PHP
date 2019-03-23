<?php 
    // Arquivo onde tem a classe Controller
    require_once('controllers/Controller.php');
    require_once('models/ClienteModel.php');

    class ControllerCliente extends Controller {
        public function __construct(){
            $this->model = new ClienteModel();
        }
        public function index (){
            $resultado = $this->model->lista();
            $this->templateData('views/site/client/listaCliente.php', $resultado);
        }
        
        public function create (){
            $cliente = array(
                "nome" => $_POST['nome'],
                "login" => $_POST['login'],
                "sexo" => $_POST['sexo'],
                "textarea" => $_POST['textarea']
            );
            $this -> model -> create ($cliente);
            //$this->template('views/site/produtos-servicos.php');
        }
        
        public function edit (){
            $this->template('views/site/contatos.php');
        }

        public function delete (){
            $this->template('views/site/sobre.php');
        }
    }
?>