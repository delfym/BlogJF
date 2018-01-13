<?php

namespace App\Controller;

use App\Model\CommentManager;

class ChapterController extends Controller {

    protected $nbPages;

    public function home() {
        $this->view->generate('home');
    }

    public function listChapters($numPage = null) {
        $chapters = $this->paging($numPage);
        $nbPages = $this->nbPages;
        $nbOfPages[0] =  (string) $nbPages;
        $this->view->generate('chaptersList', $chapters,null, null, $nbOfPages);
    }

    public function chapList() {
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

    public function paging($numPage=null){
        $currentPage = $numPage;
        $perPage = 5;
        $start = (($currentPage-1) * $perPage);
        $nbChapters = $this->chapter->countChapters();
        $this->nbPages = ceil($nbChapters/$perPage);
        if (empty($numPage)){
            return $chapters = $this->chapter->getChapters(0,5);
            //$this->view->generate('chaptersList', $chapters);
        } else {
            if(($start <= $nbChapters)
                && ($perPage <= $this->chapter->countChapters())){
            return $chapters = $this->chapter->getChapters($start, $perPage);
            }
        }
    }

    public function report($parameters){

        if (isset($parameters)){
            $this->comment->addReport($parameters);
        }
        $this->chapter($_POST['idChap']);
    }

}
