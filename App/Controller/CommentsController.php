<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 30/11/2017
 * Time: 11:18
 */

/*
namespace App\Controller;

//define('__MODEL__', '/Model/');

class CommentsController extends Controller {
   // private $chapter;
    private $comment;
    private $content;
    private $count;

    public function __construct() {
echo 'cstruct de comm_ctrl<br/>';
       // $this->chapter = new \App\Model\ChapterManager();
        $this->comment = new \App\Model\CommentsManager();
    }

    public function comments($id = null) {
     //   echo ' chapterctrl';
        if ($_GET == null) {

           return 'pas de commentaires à afficher';
        } else {
            $page = $_GET['p'];
            if ($page == 'comments') {

                echo '<br/>là<br/>';
                $id = htmlspecialchars($_GET['id']);
               // $chapter = $this->chapter->getChapter($id);
                $comments = $this->comment->getComments($id);
                $count = $this->comment->getCount();
                $this->generate('chapterView', $chapter);
                $this->generate('chapterView', $comments);
            }
        }
    }
    public function getExtract() {
            $html = '<p>' . substr($this->content, 0, 200) . '</p>';
            $html .= '<p><a href="'   . '">Voir la suite</a></p>';
            return $html;
        }

}

*/