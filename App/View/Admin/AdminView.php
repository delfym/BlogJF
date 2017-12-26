<?php

namespace App\View\Admin;

class AdminView  {
    protected $view = 'Admin/';
    protected $variables;
    protected $template = 'template'; // par défaut


    public function generate($view, $variables = []){

        $viewPath = dirname(__DIR__ ) . '/' . $this->view . $view;
        ob_start();
        if(!empty($variables)){
            extract($variables);
        }
        $content = ob_get_clean();
         require ($viewPath . '.php');
    }

}

/*
 *

 */