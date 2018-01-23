<?php

namespace App\View\Admin;

class AdminView  {
    protected $view = 'Admin/';
    protected $variables;
    protected $template = 'template'; // par défaut


    public function generate($view, $variables = [], $reports =[], $users=[]){

        $viewPath = dirname(__DIR__ ) . '/' . $this->view . $view;
         ob_start();
        if(!empty($variables)){
            extract($variables);
        }

        if (!empty($reports)) {
            extract($reports);
        }

        if (!empty($users)) {
            extract($users);
        }

        $content = ob_get_clean();
         require ($viewPath . '.php');
    }

}

/*
 *

 */