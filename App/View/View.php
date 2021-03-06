<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 11/12/2017
 * Time: 20:58
 */
namespace App\View;

class View
{
    protected $view = '/View/pages/';
    protected $variables;
    protected $reports;
    protected $template = 'template'; // par défaut


    public function generate($view, $variables = [], $comments=[], $countLines = null, $nbOfPages=null){
        $viewPath1 = dirname(__DIR__ ) . $this->view . $view;
        ob_start();
        if(!empty($variables)){
            extract($variables);
        }

        if (isset($comments) && (true == $comments)) {
            extract($comments);
        }

        if (isset($countLines)){
            $count [0] = $countLines;
            extract($count);
        }

        if (isset($nbOfPages)){
            $nbPages[0] = $nbOfPages;
            extract($nbPages[0]);
        }
        $content = ob_get_clean();
        require ($viewPath1 . '.php');
    }
}
