<?php

namespace App\Controller;

use App\Model\CommentManager;

class ChapterController extends Controller {

    public function home() {
        $this->view->generate('home');
    }

    public function listChapters() {
        $chapters = $this->chapter->getChapters();
        $this->view->generate('chaptersList', $chapters);
    }

    public function chapter($id) {
            $chapter = $this->chapter->getChapter($id);
            $comments = $this->comment->getComments($id);
            $_SESSION['countLines'] = $this->comment->getCount();
            $this->view->generate('chapterView', $chapter, $comments, $_SESSION['countLines']);
    }

    public function postComment() {
        if (isset($_POST) || empty($_POST['author']) || empty($_POST['comment'])){
            $comment = new CommentManager();
            $comment->addComment($_POST);
        }
            $this->chapter($_GET['id']);
    }

    public function paging(){
        $_SESSION['nPages'] = $this->chapter->countChapters();
    }

    public function report($parameters){

        if (isset($parameters)){
            $this->comment->addReport($parameters);
        }
        $this->chapter($_POST['idChap']);
    }

}
