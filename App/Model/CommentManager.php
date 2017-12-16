<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 30/11/2017
 * Time: 13:42
 */
namespace App\Model;

class CommentManager extends Model {
    public function getComment($id){
        // On récupère tout le contenu de la table commentaires pour ce billet
        $reply = $this->db->getPDO()->prepare('SELECT id, author, comment, DATE_FORMAT(commentDate, \'%d/%m/%Y à %Hh%imin%ss\') AS commentDate, chapterId FROM comments WHERE chapterId = ? ORDER BY commentDate DESC');
        $reply->execute(array($id));
        return $reply->fetch();
    }

    public function getComments($chapterId) {
        $req = $this->request('SELECT id, author, comment, DATE_FORMAT(commentDate, \' %d/%m/%Y à %Hh %imin %ss\') AS commentsDate, chapterId FROM comments WHERE chapterId = ? ORDER BY commentsDate ASC', [$chapterId]);
        return $req;
    }



    public function addComment($parameters=[]) {
       // echo '<pre>';
        //var_dump($_POST);
        //echo '<br/>';
        $this->request('INSERT INTO comments (author, comment, commentDate, chapterId) VALUES (:author, :comment, NOW(), :chapterId)',
        array(
            'author' => htmlspecialchars($_POST['author']),
            'comment' => htmlspecialchars($_POST['comment']),
            'chapterId' => htmlspecialchars($_POST['chapterId'])));
        }

}