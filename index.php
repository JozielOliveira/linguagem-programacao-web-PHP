<?php
    if(!isset($_GET['c'])){
      require_once('controllers/ControllerSite.php');
      $controller = new ControllerSite();
      $controller->index();
    } else {
      switch($_REQUEST['c']){
        case 's' :
          require_once('controllers/ControllerSite.php');
          $controller = new ControllerSite();
          switch($_REQUEST['a']){
            case 'h': $controller->index(); break;
            case 'p': $controller->product(); break;
            case 's': $controller->about(); break;
            case 'f': $controller->contact(); break;  
          }
        break;
        case 'cliente' : 
          require_once('controllers/ControllerCliente.php');
          util(new ControllerCliente());
        break;
        case 'produto' : 
          require_once('controllers/ControllerProduto.php');
          util(new ControllerProduto());
        break;
      }
    }

    function util ($controllers) { 
          switch($_REQUEST['metodo']){
            case 'lista': $controllers->index(); break;
            case 'criar': $controllers->create(); break;
            case 'editar': $controllers->edit(); break;
            case 'delete': $controllers->delete(); break;
          }
    }
?>