<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 17/12/2017
 * Time: 22:52
 */
namespace App\Controller\Admin;

use App\Model\Admin\Users;

class UserController extends \App\Controller\Controller
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
    public function setLogin($login = []) {
        if (!empty($login)) {
            $this->user = htmlspecialchars($login['username']);
            $this->password = htmlspecialchars($login['password']);
            if (true == $this->loginAuth()) {
                $chapters = $this->chapter->getChapters();
                $this->view->generate('admin','chapters'); //envoie vers une page avec tableau listant les chapitres existants
                //intégration de CRUD
            }
        } else {
            $this->viewAdmin->generate('login');
        }
    }

    public function home() {
        $chapters = $this->chapter->getChapters();
        $this->viewAdmin->generate('chapterList',$chapters);
    }

    public function chapter($id) {
        $chapter = $this->chapter->getChapter($id);
        $this->viewAdmin->generate('chapterView', $chapter);
    }

    public function update($data){
        $id = $data['id'];
        $chapter = $this->chapter->update($data);
        $chapter = $this->chapter->getChapter($id);
        //var_dump($chapter);
        $this->viewAdmin->generate('chapterView', $chapter);
    }

    public function delete($id){
        $this->chapter->delete($id);
        $chapters = $this->chapter->getChapters();
        $this->viewAdmin->generate('chapterList', $chapters);
    }

    public function create($data){
        $newChapter = $this->chapter->create($data);
        var_dump($newChapter);
        $chapters = $this->chapter->getChapters();
        $this->viewAdmin->generate('chapterList', $chapters);
    }

    public function chapterNew(){
        $this->viewAdmin->generate('chapterNew');
    }
}