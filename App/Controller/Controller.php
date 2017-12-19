<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 01/12/2017
 * Time: 10:24
 */
namespace App\Controller;

/*
 * récupérer le type de requête
 * récupérer l'action
 * renvoyer les références de la page à la vue
 */

abstract class Controller {
    protected $view;
    protected $viewAdmin;
    protected $chapter;
    protected $comment;

    public function __construct() {
        $this->chapter = new \App\Model\ChapterManager();
        $this->comment = new \App\Model\CommentManager();
        $this->view = new \App\View\View();
        $this->viewAdmin = new \App\View\Admin\AdminView();
    }
   // public function request()

}
