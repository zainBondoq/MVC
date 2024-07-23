<!-- the main controller class and each other controller will extends this class
this will loads the model and views
-->

<?php

class Controller {
    // Load model 
    public function model($model){
        // Require model file
        require_once '../models/' . $model . '.php';

        // Instantiate the model 
        return new $model();
    }

    // Load view 
    public function view($view, $data = []){
        // Check view file
        if(file_exists('../views/' . $view . '.php')){
            require_once '../views/' . $view . '.php';
        }else{
            die('View does not exist');
        }
    }
}
