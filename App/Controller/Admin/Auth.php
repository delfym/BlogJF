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
    private $login = [];

    /*
     * Vérifie et compare id de la bdd
     */
    private function loginAuth()
    {
        $this->login = $this->users->getUsers();
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
    public function setLogin($logs = [])
    {
        if (!empty($logs)) {
            $this->user = htmlspecialchars($logs['username']);
            $_SESSION['username'] = $this->user;
            $this->pass = htmlspecialchars($logs['password']);
            $chapters = $this->chapter->getChaptersList();
            if (false == $this->loginAuth()) {
                $_SESSION['error'] = "identifiants incorrects";
                $this->viewAdmin->generate('login', [$_SESSION['error']]); //ajouter un parametre message d'erreur
            } else {
                $_SESSION ['access'] = true;
                $reports = $this->comment->getReports();
                $this->viewAdmin->generate('chapterList', $chapters, $reports);
            }
        } else {
            $this->viewAdmin->generate('login');
        }
    }

    public function createLogin($login)
    {
        if (!is_null($login)) {
            $this->users->addUser($login);
            $this->home();
            //$chapters = $this->chapter->getChapters();
            // $this->viewAdmin->generate('chapterList', $chapters);
        } else {
            $this->viewAdmin->generate('login', [$_SESSION['error']]);
        }
    }

    public function login()
    {
        $this->viewAdmin->generate('loginNew');
    }

    public function loginChange($data)
    {
        $logs = $this->users->getUser($data['userSelected']);
        $_SESSION['user'] = $logs[0]['username'];
        $_SESSION['userSelected'] = $data['userSelected'];
        $this->viewAdmin->generate('loginUpDel');
    }

    public function updateLogin($login)
    {
        if ((!empty($login['controlPass'])) && (!empty($login['password'])) && ($login['controlPass'] == $login['password'])) {
            if (!is_null($login)) {
                $this->users->updateUser($login);
                $this->home();
            }
        } else {
            $_SESSION['error'] = 'Les mots de passe saisis ne sont pas identiques ou sont vides.
             Merci de les saisir à nouveau';
            $this->viewAdmin->generate('loginUpDel', [$_SESSION['error']]);  //A revoir
        }
    }

    public function deleteLogin($id)
    {
        $this->users->deleteUser($id);
        $this->home();
    }

    public function reset(){
        $_SESSION ['access'] = false;
        session_destroy();
        $this->view->generate('home');
    }

}
