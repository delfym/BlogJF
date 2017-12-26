<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 26/12/2017
 * Time: 16:24
 */

namespace App\Controller\Admin;

class Auth extends UserController
{
    private $user;
    private $password;
    private $login=[];
    /*
 * Vérifie et compare id de la bdd
 */
    private function loginAuth(){
        $this->login = $this->users->getUser();
       // var_dump($this->login);
        if (($this->login['username'] !== $this->user) && ($this->login['password'] !== $this->password)) {
         //   echo '<br/>false<br/>';
            return false;
        } else {
           // echo '<br/>true<br/>';
            return true;
        }
    }

    /*
 * récupère et contrôle les id envoyés ds form
 */

    public function setLogin($login=[]) {
        if (!empty($login)) {
          //  echo 'je suis dans setLogin pas vide<br/>';
            $this->user = htmlspecialchars($login['username']);
            $this->password = htmlspecialchars($login['password']);
           // var_dump($this->user);
           // var_dump($this->loginAuth());
            $chapters = $this->chapter->getChapters();
            if (false == $this->loginAuth()) {
               // var_dump($chapters);
               // echo 'je suis là';
                $this->viewAdmin->generate('login'); //envoie vers une page avec tableau listant les chapitres existants
                //intégration de CRUD
            } else {
                $this->viewAdmin->generate('chapterList', $chapters);
            }
        } else {
          //  echo 'je suis ici';
            $this->viewAdmin->generate('login');
        }
    }
/*
    public function login(){
        $this->viewAdmin->generate('login');
    }
*/

}