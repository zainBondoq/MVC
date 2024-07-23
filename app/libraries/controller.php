<!-- the main controller class and each other controller will extends this class
this will loads the model and views
-->

<?php

class Controller {
    // load model 
    public function model($model){
        // require model file
        require_once '../models' . $model . 'php';

        // instantiate the model 
        return new $model();
    }


    //load view 

    public function view ($view, $data = []){
        // check view file
        if(file_exists('../views' . $view .'php')){
            require_once '../views' . $view .'php';
        }else{
            die('View does not exsist');
        }
    }



}
