<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 26/12/2017
 * Time: 23:21
 */

namespace App\Controller;


class RouterUsers extends Router {

    public function __construct(){
        parent::__construct();
    }

    public function Route(){
        try {
            if (isset($_GET['p'])){
                if ($_GET['p'] == 'post') {
                    $this->page->postComment();
                } elseif (isset($_GET) && !empty($_GET['id'])) {
                    $this->page->chapter(htmlspecialchars($_GET['id']));
                } elseif ($_GET['p'] == 'login') {
                    $this->auth->setLogin();
                } elseif ($_GET['p'] == 'chapter'){
                    $this->page->chapter($_GET['id']);
                } elseif (($_GET['p'] == 'list')&& isset($_GET['numPage'])) {
                    $this->page->listChapters($_GET['numPage']);
                } elseif ($_GET['p'] == 'list') {
                    $this->page->listChapters();
                } elseif ($_GET['p'] == 'report') {
                    $this->user->home();
                } elseif (isset($_POST['report'])) {
                    $this->page->report($_POST);
                }
            } else {
                $this->page->home();
            }
        }
        catch (Exception $e) {
            echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
        }
    }
}