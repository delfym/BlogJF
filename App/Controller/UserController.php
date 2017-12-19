<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 17/12/2017
 * Time: 22:52
 */
namespace App\Controller;

use App\Model\Users;

class UserController extends Controller
{
    private $user;
    private $password;
    private $login;
    private $users;

    public function __construct(){
        parent::__construct();
        $this->users = new Users();
    }

    /*
     * Vérifie et compare id de la bdd
     */
    private function loginAuth(){
        $this->login = $this->users->getUser();
        if (($this->login['username'] !== $this->user) && ($this->login['password'] !== $this->password)) {
            return false;
        }
    }

    /*
     * récupère et contrôle les id envoyés ds form
     */
    public function setLogin($login = [])
    {
        if (!empty($login)) {
            echo 'je suis là';
            $this->user = htmlspecialchars($login['username']);
            $this->password = htmlspecialchars($login['password']);
            if (true == $this->loginAuth()) {
                $this->view->generate('admin'); //envoie vers une page avec tableau listant les chapitres existants
                //intégration de CRUD
            }
        } else {
            $this->viewAdmin->generate('login');
        }
    }
}