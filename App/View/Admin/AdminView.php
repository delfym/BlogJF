<?php

namespace App\View\Admin;

class AdminView  {
    //envoie vers une page avec tableau listant les chapitres existants
    //intégration de CRUD
    //intégration du formulaire par classe
    protected $view = 'Admin/';
    protected $variables;
    protected $template = 'template'; // par défaut


    public function generate($view, $variables = []){
        $viewPath1 = dirname(__DIR__ ) . '/' . $this->view . $view;
        ob_start();
        if(!empty($variables)){
            extract($variables);
        }
        $content = ob_get_clean();
         require ($viewPath1 . '.php');
    }

}

/*
 *

 */