<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 26/12/2017
 * Time: 23:21
 */

namespace App\Controller\Admin;


class RouterAdmin extends \App\Controller\Router
{
    public function Route(){
        try {
            if (isset($_GET['p'])) {
                if ($_GET['p'] == 'home') {
                    $this->user->home();
                } elseif ($_GET['p'] == 'login') {
                    $this->auth->login();
                } elseif ($_GET['p'] == 'chapterNew') {
                    $this->user->chapterNew();
                } elseif ($_GET['p'] == 'create') {
                    $this->user->create($_POST);
                }
            } elseif (isset($_POST['chapter'])) {
                $this->user->chapter($_POST['chapterSelected']);
            } elseif (isset($_POST['reportSelected'])) {
                $this->user->home($_POST['reportSelected']);
            } elseif (isset($_POST['update'])){
                $this->user->update($_POST);
            } elseif (isset($_POST['delete'])){
                $this->user->delete($_POST['id']);
            } elseif (isset($_POST['create'])){
                $this->user->create($_POST);
            } elseif (isset($_POST['cancel'])){
                $this->user->home();
            } elseif (isset($_POST['auth'])){
                $this->auth->setLogin($_POST);
            } elseif (isset($_POST['newlog'])){
                $this->auth->createLogin($_POST);
            } else {
                $this->user->home();
            }
        }
        catch (Exception $e) {
            echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
        }
    }
}