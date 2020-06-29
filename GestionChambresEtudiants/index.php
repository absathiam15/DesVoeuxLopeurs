<?php
    define("BASE_URL","http://localhost/GestionChambresEtudiants");
    require_once("./libs/Router.php");
    $router=new Router();
    $router->route();

