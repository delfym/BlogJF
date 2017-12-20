<?php

namespace App\Controller;

use App\Model\CommentManager;

class ChapterController extends Controller {

    public function home() {
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
          //  echo 'test 2 <br/>';
          $comment = new CommentManager();
          //var_dump($comment);
          $comment->addComment($_POST);
       //   echo '<pre>';
         // var_dump($res);
           //echo 'test 3 <br/>';
            header('Location: index.php?p=chapter&id='.$_GET['id']);
            exit();
        }
    }

}