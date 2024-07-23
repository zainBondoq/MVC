<?php

class Pages extends Controller {
    public function __construct() {
        // Constructor code if needed
    }

    public function index(){
        $this->view('pages/index' ,['tittle' => 'welcome']);
    }

    public function about(){
        $this->view('pages/about');        
    }
}