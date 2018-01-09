<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 30/11/2017
 * Time: 13:42
 */

namespace App\Model;

class CommentManager extends Model
{

    public function getComment($id)
    {
        return $this->request('SELECT id, author, comment, DATE_FORMAT(commentDate, \'%d/%m/%Y à %Hh%imin%ss\') AS commentDate, chapterId FROM comments WHERE chapterId = ? ORDER BY commentDate DESC', [$id],
            array(
                'author' => htmlspecialchars($_POST['author']),
                'comment' => htmlspecialchars($_POST['comment']),
                'chapterId' => htmlspecialchars($_POST['chapterId'])
            ));

    }

    public function getComments($chapterId)
    {
        return $this->request('SELECT id, author, comment, DATE_FORMAT(commentDate, \' %d/%m/%Y à %Hh %imin %ss\') AS commentsDate, chapterId FROM comments WHERE chapterId = ? ORDER BY commentDate DESC', [$chapterId]);
    }

    public function addComment($parameters = [])
    {
        return $this->request('INSERT INTO comments (author, comment, commentDate, chapterId) VALUES (:author, :comment, NOW(), :chapterId)',
            array(
                'author' => htmlspecialchars($_POST['author']),
                'comment' => htmlspecialchars($_POST['comment']),
                'chapterId' => htmlspecialchars($_POST['chapterId'])));
    }

    public function addReport($parameters)
    {
        $id = htmlspecialchars($_GET['id']);
        return $this->request(
            'UPDATE comments SET reported = true, report = :report WHERE chapterId=' . $id,
            array(
                'report' => htmlspecialchars($parameters['reportSelected']),
            ));
    }

    public function getCount()
    {
        return parent::getCount(); // TODO: Change the autogenerated stub
    }

    public function getReports()
    {
        return $this->request('SELECT * FROM reports JOIN comments WHERE reports.commentId = comments.id');
    }

    public function updateReport($data){
        $this->request('UPDATE reports SET title = :title, chapterName = :chapterName,  content = :content, creationDate = NOW() WHERE id =' . $data['id'],
            array(
                'title' => htmlspecialchars($data['title']),
                'chapterName' => htmlspecialchars(($data['chapterName'])),
                'content'=> htmlspecialchars($data['textAdmin']))
        );
    }

    public function deleteReport($id){
        $this->request('DELETE FROM report WHERE commentId = ?', [$id]);
    }

    public function deleteComment($id){
        $this->request('DELETE FROM comment WHERE commentId = ?', [$id]);
    }

}
