<?php 
namespace core;
class router{
   public $routes=[
    'get'=>[

    ],
    'post'=>[

    ]];

   
   public function get($uri,$controller){
    return $this->routes['get'][$uri]=$controller;
} 
public function post($uri,$controller){
    return $this->routes['post'][$uri]=$controller;
} 
};
?>