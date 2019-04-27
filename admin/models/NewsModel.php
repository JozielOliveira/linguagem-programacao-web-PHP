<?php
    require_once('models/Model.php');

    class NewsModel extends Model {
        public function list(){
            $sql = "SELECT * FROM news";
            $resultado = $this->select($sql);
            $arrayNews = array();
                    
            if($resultado->num_rows > 0){
                while($linha = $resultado->fetch_assoc()){
                    array_push($arrayNews, $linha);
                }
            } else {
                echo "0 results";
            }
            return $arrayNews;
        }   
        public function consultNews ($id) {
            $sql = "SELECT * FROM news WHERE idNew = ".$id.";";
            $result = $this -> select($sql);
            return $result;
        }
        public function insertNews($news){
            $sql = "INSERT INTO news (title, news, foto) VALUES ('".$news['title']."', '".$news['news']."', '".$news['foto']."' )";
            $resultado = $this->select($sql);  
            return $resultado;
        }

        public function updateNews ($news) {
            $sql = "UPDATE news SET name='".$news['name']."', endereco='".$news['endereco']."', email='".$news['email']."', telefone='".$news['telefone']."', foto='".$news['foto']." WHERE idNews='".$news['idClient']."'";
            $resultado = $this->select($sql);  
            return $resultado;
        }

        public function deleteNews ($id) {
            $sql = "DELETE FROM news WHERE idNew='".$id."'";
            $resultado = $this->select($sql);  
            return $resultado;
        }

    }
?>
