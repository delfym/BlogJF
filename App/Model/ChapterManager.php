<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 29/11/2017
 * Time: 23:49
 */
namespace App\Model;

class ChapterManager extends Model {
    public function create(){
        $req = $this->request('INSERT INTO chapter(title, content, creationDate) VALUES (:title, :content, NOW())',
        (array(
            'title' => htmlspecialchars($_POST ['title']),
            'content' => htmlspecialchars($_POST['content'])
        )));
    }

    public function update($id){
        $this->request('UPDATE chapter SET title = :title, content= :CONTENT, creationDate = NOW() WHERE id = '. $id,
            array('title' => htmlspecialchars($_POST['title']),
            'content'=> htmlspecialchars($_POST['content']))
        );
    }
    public function delete($id){
        $this->db->getPDO()->exec('DELETE FROM chapter WHERE id = '. $id);
    }

    public function getChapters() {
        return $this->request('SELECT id, title, content, DATE_FORMAT(creationDate, \'%d/%m/%Y\') AS chapterDate FROM chapter ORDER BY creationDate LIMIT 0,10' );
    }

    public function getChapter($id) {
        return $this->request('SELECT id, title, content, DATE_FORMAT(creationDate, \'%d/%m/%Y\') AS chapterDate  FROM chapter WHERE id = ?', [$id]);
    }

}

