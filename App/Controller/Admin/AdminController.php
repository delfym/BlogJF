<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 17/12/2017
 * Time: 22:52
 */
namespace App\Controller\Admin;

use App\Model\Admin\Users;

class AdminController extends \App\Controller\Controller
{
    protected $users;

    public function __construct(){
        parent::__construct();
        $this->users = new Users();
    }

    public function home() {
        $chapters = $this->chapter->getChaptersList();
        $reports = $this->comment->getReports();
        $users = $this->users->getUsers();
        $this->viewAdmin->generate('chapterList',$chapters, $reports, $users);
    }

    public function chapter($id) {
        $chapter = $this->chapter->getChapter($id);
        $this->viewAdmin->generate('chapterView', $chapter);
    }

    public function update($data){
        $id = $data['id'];
        $chapter = $this->chapter->update($data);
        $chapter = $this->chapter->getChapter($id);
        $this->viewAdmin->generate('chapterView', $chapter);
    }

    public function delete($id){
        $this->chapter->delete($id);
        $this->home();
    }

    public function create($data){
        $this->chapter->create($data);
        $chapters = $this->chapter->getChapters();
        $this->viewAdmin->generate('getChaptersList', $chapters);
    }

    public function chapterNew(){
        $this->viewAdmin->generate('chapterNew');
    }

    public function deleteReport($id){
        $this->comment->deleteReport($id);
        $this->home();
    }

    public function deleteComment($id){  //supprimer le commentaire + le report
        $this->comment->deleteReport($id);
        $this->comment->deleteComment($id);
        $this->home();
    }

}