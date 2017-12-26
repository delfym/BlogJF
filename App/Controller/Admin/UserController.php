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
    protected $users;

    public function __construct(){
        parent::__construct();
        $this->users = new Users();
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