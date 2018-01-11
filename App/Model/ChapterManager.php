<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 29/11/2017
 * Time: 23:49
 */
namespace App\Model;

class ChapterManager extends Model {

    public function create($data){
        $this->request('INSERT INTO chapter(title, chapterName, content, creationDate) VALUES (:title, :chapterName, :content, NOW())',
        (array(
            'title' => 'CHAPITRE ' . htmlspecialchars($data ['title']),
            'chapterName' => htmlspecialchars($data['chapterName']),
            'content' => htmlspecialchars($data['textAdmin'])
        )));
    }

    public function update($data){
        return $this->request('UPDATE chapter SET title = :title, chapterName = :chapterName,  content = :content, creationDate = NOW() WHERE id =' . $data['id'],
            array(
            'title' => htmlspecialchars($data['title']),
            'chapterName' => htmlspecialchars(($data['chapterName'])),
            'content'=> htmlspecialchars($data['textAdmin']))
        );
    }

    public function delete($id){
        $this->request('DELETE FROM chapter WHERE id = ?', [$id]);
    }

    public function getChapters() {
        return $this->request('SELECT id, title, chapterName, content, DATE_FORMAT(creationDate, \'%d/%m/%Y\') AS chapterDate FROM chapter ORDER BY id' );
    }

    public function getChapter($id) {
        return $this->request('SELECT id, title, chapterName, content, DATE_FORMAT(creationDate, \'%d/%m/%Y\') AS chapterDate  FROM chapter WHERE id = ?', [$id]);
    }

    public function countChapters(){
        return $this->request('SELECT COUNT(*) FROM chapter');
    }

}

