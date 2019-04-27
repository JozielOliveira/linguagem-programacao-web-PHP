<?php 
    class Controller {
        public function template ($content) {
            require_once('views/header.php');
            require_once($content);
            require_once('views/footer.php');  
        } 

        public function templateData ($content, $data) {
            $data;
            require_once('views/header.php');
            require_once($content);
            require_once('views/footer.php');  
        }
        
        public function saveFile ($file, $nameFile) {
            $foto_temp = $file["tmp_name"];	//pega o caminho temporário do arquivo
            $foto_name = $file["name"];		//pega o nome
            echo $nameFile;
            $extensao = str_replace('.','',strrchr($foto_name, '.')); //strtolower(end(explode('.', $foto_name))); //seleciona a extenção da imagem
            $max_width = 600;
            $max_height = 600;

            // Carrega a imagem 
            $img = null;

            //Transforma a imagem em JPG
            if ($extensao == 'jpg' || $extensao == 'jpeg') { 
                $img = @imagecreatefromjpeg($foto_temp);
            } else if ($extensao == 'png') { 
                $img = @imagecreatefrompng($foto_temp);
            } else if ($extensao == 'gif') { 
                $img = @imagecreatefromgif($foto_temp); 
            }  else     
                $img = @imagecreatefromjpeg($foto_temp); 

            // Se a imagem foi carregada com sucesso, testa o tamanho da mesma
            if ($img) { 
                // Pega o tamanho da imagem e calcula propor��o de resize 
                $width  = imagesx($img); 
                $height = imagesy($img); 
                $scale  = min($max_width/$width, $max_height/$height); 
                // Se a imagem � maior que o permitido, encolhe ela! 
                if ($scale < 1) { 
                    $new_width = floor($scale*$width); 
                    $new_height = floor($scale*$height);
                    // Cria uma imagem tempor�ria 
                    $tmp_img = @imagecreatetruecolor($new_width, $new_height);
                    // Copia e resize a imagem velha na nova     
                    @imagecopyresampled($tmp_img, $img, 0, 0, 0, 0, 
                                    $new_width, $new_height, $width, $height);  
                    @imagedestroy($img); 
                    $img = $tmp_img; 
                }           
            }

            return imagejpeg($img, "assets/img/".$nameFile.".jpg"); 
        }
    }
?>