<?php 
    // Arquivo onde tem a classe Controller
    require_once('controllers/Controller.php');
    require_once('models/NewsModel.php');

    class NewsController extends Controller {
        public function __construct(){
            if(!isset($_SESSION["login"])) {
                header("Location: ?c=m&a=l");
            }
            $this -> NewsModel = new NewsModel();
        }
        public function index (){
            $resultado = $this->NewsModel->list();
            $this->templateData('views/news/listNews.php', $resultado);
        }
        
        public function insertNews (){
            $this -> template("views/news/createNews.php");
        }

        public function insertNewsAction (){

            $new = array(
                "title" => $_POST['title'],
                "news" => $_POST['news'],
                "foto" => "assets/img/".$_POST['title'].".jpg"
            );

            if(isset($_FILES['foto'])) {
                $this -> saveFile($_FILES['foto'], $new['title']);
            }

            $this -> NewsModel -> insertNews ($new);
            
            header("Location: ?c=n&m=i");
        }
        
        public function updateNews ($id){
            $resultado = $this-> NewsModel->consultNews($id);
            $resultado = $resultado->fetch_assoc();
            $this->templateData('views/news/updateNews.php', $resultado);
        }

        public function updateNewsAcion (){
            $new = array(
                "idNews" => $_POST['idNews'],
                "title" => $_POST['title'],
                "news" => $_POST['titles'],
                "foto" => "assets/img/".$_POST['title'].".jpg"
            );

            if(isset($_FILES['foto'])) {
                $this -> saveFile($_FILES['foto'], $new['title']);
            }
            
            $this -> NewsModel -> updateNews($new);

            header("Location: ?c=n&m=i");
        }

        public function deleteNews (){
            if ($_GET['id'])
                $this-> NewsModel -> deleteNews($_GET['id']);
            if ($_GET['telefone'])
                unlink('assets/img/'.$_GET['telefone'].'.jpg');
            header("Location: ?c=n&m=i");
        }
    }
?>