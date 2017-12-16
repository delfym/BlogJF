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
        $req = $this->request('SELECT id, author, comment, DATE_FORMAT(commentDate, \' %d/%m/%Y à %Hh %imin %ss\') AS commentDate, chapterId FROM comments WHERE chapterId = ? ORDER BY commentDate DESC', [$chapterId]);
        return $req;
    }



    public function addComment($parameters=[]) {
// Effectuer ici la requête qui insère le commentaire
        $req = $bdd->prepare('INSERT INTO comments (author, comment, commentDate, chapterId) VALUES (:author, :comment, NOW(), :chapterId)');

        $req->execute(array(
            'author' => htmlspecialchars($_POST['author']),
            'CommentManager' => htmlspecialchars($_POST['CommentManager']),
            'chapterId' => htmlspecialchars($_POST['chapterId'])
        ));
      //  $req = $bdd->prepare('INSERT INTO comments (author, comment, commentDate, chapterId) VALUES (:author, :comment, NOW(), :chapterId)');
    }

}