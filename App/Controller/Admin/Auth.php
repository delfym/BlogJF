<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 26/12/2017
 * Time: 16:24
 */

namespace App\Controller\Admin;

class Auth extends AdminController
{
    private $user;
    private $pass;
    private $login=[];

/*
 * Vérifie et compare id de la bdd
 */
    private function loginAuth() {
        $this->login = $this->users->getUsers();
        $i = 0;

        foreach ($this->login as $logs) {
            $passHashed = password_verify($this->pass, $logs['password']);
            if (($logs['username'] == $this->user) && ($passHashed == true)) {
                return true;
            }
        }
    }

    /*
 * récupère et contrôle les logins envoyés ds form
 */
    public function setLogin($logs=[]) {
        if (!empty($logs)) {
            $this->user = htmlspecialchars($logs['username']);
            //$_SESSION ['username'] = $this->user;
            $this->pass = ($logs['password']);
            $chapters = $this->chapter->getChapters();
            if (false == $this->loginAuth()) {
                $_SESSION['error'] = "identifiants incorrects";
                $this->viewAdmin->generate('login', [$_SESSION['error']]); //ajouter un parametre message d'erreur
            } else {
                $reports = $this->comment->getReports();
                $this->viewAdmin->generate('chapterList', $chapters,$reports);
            }
        } else {
            $this->viewAdmin->generate('login');
        }
    }

    public function createLogin($login) {
        if(!is_null($login)){
            $this->users->addUser($login);
            $chapters = $this->chapter->getChapters();
            $this->viewAdmin->generate('chapterList', $chapters);
        }
        else {
            $this->viewAdmin->generate('login', [$_SESSION['error']]);
        }
    }

    public function login(){
        $this->viewAdmin->generate('loginNew');
    }

}
