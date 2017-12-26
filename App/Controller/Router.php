<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 26/12/2017
 * Time: 23:21
 */

namespace App\Controller;


class Router
{
    protected $page;
    protected $user;
    protected $auth;

    public function __construct()
    {
        $this->page = new ChapterController();
        $this->user = new Admin\UserController();
        $this->auth = new Admin\Auth();
    }

    public function Route(){
        try {
            if (isset($_GET['p'])){
                if ($_GET['p'] == 'post') {
                    $this->page->post();
                } elseif (isset($_GET) && !empty($_GET['id'])) {
                    $this->page->chapter(htmlspecialchars($_GET['id']));
                } elseif ($_GET['p'] == 'login') {
                    $this->auth->setLogin();
                } elseif ($_GET['p'] == 'loginNew') {
                    $this->auth->login();
                } elseif  ($_GET['p'] == 'chapter'){
                    $this->page->chapter($_GET['id']);
                }elseif  ($_GET['p'] == 'home'){
                    $this->page->home();
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