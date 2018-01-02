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
        $page = $_GET;
        if ($page['p'] == 'chapter') {
            $chapter = $this->chapter->getChapter($id);
            $comments = $this->comment->getComments($id);
            $_SESSION['countLines'] = $this->comment->getCount();
            $this->view->generate('chapterView', $chapter, $comments, $_SESSION['countLines']);
        }
    }

    public function post() {
        if (!isset($_POST) || empty($_POST['author']) || empty($_POST['comment'])){
            header('Location: index.php?p=chapter&id='.$_GET['id']);
            exit();
        } else {
            $comment = new CommentManager();
            $comment->addComment($_POST);
            header('Location: index.php?p=chapter&id='.$_GET['id']);
            exit();
        }
    }

}