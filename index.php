<?php

use core\request;
use core\router;
  
  //require_once "core/router.php";
  require_once "vendor/autoload.php";
  
  $router=new router();
  require "app/routes.php";
  //var_dump($router->routes);
  echo"<pre>";
  var_dump(trim($_SERVER['REQUEST_URI'], "/"));

 /*var_dump(trim(
    parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),"/"));*/
  
    
?>