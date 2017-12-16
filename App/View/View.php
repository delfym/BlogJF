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
    protected $template = 'template'; // par défaut


    public function generate($view, $variables = [], $comments=[], $countLines = null){
        $viewPath1 = dirname(__DIR__ ) . '/' . $this->view . $view;
        ob_start();
        extract($variables);

        if (isset($comments) && (true == $comments)) {
            extract($comments);
        }
        if (isset($countLines)){
            $count [0] = $countLines;
            extract($count);
        }
        $content = ob_get_clean();
        require ($viewPath1 . '.php');
    }

    public function getExtract($chapter){
        return $data = substr($chapter, 0, 10);
    }
}
