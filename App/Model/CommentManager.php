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
        return $this->request('SELECT id, author, comment, DATE_FORMAT(commentDate, \'%d/%m/%Y à %Hh%imin%ss\') AS commentDate, chapterId FROM comments WHERE chapterId = ? ORDER BY commentDate DESC', [$id],
            array(
                'author' => htmlspecialchars($_POST['author']),
                'comment' => htmlspecialchars($_POST['comment']),
                'chapterId' => htmlspecialchars($_POST['chapterId'])
            ));

    }

    public function getComments($chapterId) {
        return $this->request('SELECT id, author, comment, DATE_FORMAT(commentDate, \' %d/%m/%Y à %Hh %imin %ss\') AS commentsDate, chapterId FROM comments WHERE chapterId = ? ORDER BY commentDate DESC', [$chapterId]);
    }

    public function addComment($parameters=[]) {
        return $this->request('INSERT INTO comments (author, comment, commentDate, chapterId) VALUES (:author, :comment, NOW(), :chapterId)',
        array(
            'author' => htmlspecialchars($_POST['author']),
            'comment' => htmlspecialchars($_POST['comment']),
            'chapterId' => htmlspecialchars($_POST['chapterId'])));
    }

    public function addReport($id){
        $this->request('INSERT INTO comments (reported, report) VALUES (:reported, :report) WHERE chapterId='.[$id],
            array(
                'reported' => htmlspecialchars($_POST['author']),
                'report' => htmlspecialchars($_POST['comment']),
                ));
    }

}