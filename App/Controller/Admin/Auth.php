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
    private $password;
    private $login=[];

/*
 * Vérifie et compare id de la bdd
 */
    private function loginAuth(){
        $this->login = $this->users->getUser();
        $passHashed = password_verify($this->password, $this->login['password']);
        if (($this->login['username'] !== $this->user) && ( false == $passHashed)) {
            return false;
        } else {
            return true;
        }
    }

    /*
 * récupère et contrôle les logins envoyés ds form
 */
    public function setLogin($login=[]) {
        if (!empty($login)) {
            $this->user = htmlspecialchars($login['username']);
            $this->password = htmlspecialchars($login['password']);
            $chapters = $this->chapter->getChapters();
            if (false == $this->loginAuth()) {
                $this->viewAdmin->generate('login');
            } else {
                $this->viewAdmin->generate('chapterList', $chapters);
            }
        } else {
            $this->viewAdmin->generate('login');
        }
    }

    public function createLogin($login) {
        $this->users->addUser($login);
        $chapters = $this->chapter->getChapters();
        $this->viewAdmin->generate('chapterList', $chapters);
    }

    public function login(){
        $this->viewAdmin->generate('loginNew');
    }


}