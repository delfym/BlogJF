<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 30/11/2017
 * Time: 11:18
 */
namespace App\Controller;

use App\Model\CommentManager;

class ChapterController extends Controller {
    private $chapter;
    private $comment;
    private $view;

    public function __construct() {
        $this->chapter = new \App\Model\ChapterManager();
        $this->comment = new \App\Model\CommentManager();
        $this->view = new \App\View\View();
    }

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

    public function post(){
        if (!isset($_POST)){
            return '';
        } else {
          $comment = new CommentManager();
          $comment->addComment($_POST);
         // header('Location:\App\index.php');
         // exit;
        }
    }

}