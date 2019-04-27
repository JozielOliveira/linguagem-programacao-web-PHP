<?php
  session_start();
  require "config/config.php";


  if(!isset($_GET['c'])){
    require 'controllers/MainController.php';
    $controller = new MainController();
    $controller->index();
  } else {
      switch($_REQUEST['c']){
        case 'm' :
          require_once('controllers/MainController.php');
          $controller = new MainController();
          
          if (!isset($_GET["a"])) {
            $controller -> index();
          } else {
            switch ($_GET["a"]) {
              case 'i' : $controller -> index(); break;
              case 'l' : $controller -> login(); break;
              case 'sd' : $controller -> sessionDestroy(); break;
            }
          }
        break;

        case 'u' : 
          require_once('controllers/UsersController.php');
          $User = new UsersController();
          
          if (!isset($_GET["a"])) {
            $User -> index();
          } else {
            switch ($_GET["a"]) {
              case 'vl' : $User -> validateLogin(); break;
            }
          }
        break;

        
        case 'c' : 
          require_once('controllers/ClientsController.php');
          $controller = new ClientsController();
          
          if (!isset($_GET["a"])) {
            $controller -> index();
          } else {
            switch ($_GET["a"]) {
              case 'i' : $controller -> index(); break;
              case 'c' : $controller -> insertClient(); break;
              case 'ca' : $controller -> insertClientAction(); break;
              case 'u' : $controller -> updateClient($_GET["id"]); break;
              case 'ua' : $controller -> updateClientAcion(); break;
              case 'd' : $controller -> deleteCliente(); break;
            }
          }
        break;
        case 'n' : 
          require_once('controllers/NewsController.php');
          $controller = new NewsController();
          
          if (!isset($_GET["a"])) {
            $controller -> index();
          } else {
            switch ($_GET["a"]) {
              case 'i' : $controller -> index(); break;
              case 'c' : $controller -> insertNews(); break;
              case 'ca' : $controller -> insertNewsAction(); break;
              case 'u' : $controller -> updateNews($_GET["id"]); break;
              case 'ua' : $controller -> updateNewsAcion(); break;
              case 'd' : $controller -> deleteNews(); break;
            }
          }
        break;
      }
    }

?>