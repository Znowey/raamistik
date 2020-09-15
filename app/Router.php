<?php

namespace App;

class Router {
    private_$uri;
    private_method;
}

public function __construct($uri, $method){
    $this -> $uri = $uri;
    $this -> $method = $method;
    $this -> match();
    require(__DIR__'/../routes.php')
}

public function match(){

    $uris = array_keys($this->routes);
    if(in_array($this->uri, $uris)){
        call_user_func($this->routes[$this->$uri]);
    }else {
        $title = "404 page not found";
        include(__DIR__ . '/../views/page.php');
    }
}