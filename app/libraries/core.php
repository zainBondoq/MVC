<?php

// app core class that creates URL & loads core controller 
// URL format - /controller/methos/params

class Core {
    protected $currentController = 'Pages';
    protected $currentMethos = 'index';
    protected $params = [];
    
    public function __construct() {
        $this->getUrl();
    }

    public function getUrl(){
        echo $_GET['url'];
    }
}

