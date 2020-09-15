<?php

namespace App;

class Cat {
    private $uri;
    private  $method;

    public function __construct($uri, $method)
    {
        $this->uri = $uri;
        $this->method = $method;
        $this->match();
    }
    public function match(){
        
    }
}