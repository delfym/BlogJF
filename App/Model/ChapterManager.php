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
        $this->request('INSERT INTO chapter(chpNumber, chapterName, content, creationDate) VALUES (:chpNumber, :chapterName, :content, NOW())',
        (array(
            'chpNumber' => 'CHAPITRE ' . htmlspecialchars($data ['chpNumber']),
            'chapterName' => htmlspecialchars($data['chapterName']),
            'content' => htmlspecialchars($data['textAdmin'])
        )));
    }

    public function update($data){
        return $this->request('UPDATE chapter SET chpNumber = :chpNumber, chapterName = :chapterName,  content = :content, creationDate = NOW() WHERE id =' . $data['id'],
            array(
            'chpNumber' => htmlspecialchars($data['chpNumber']),
            'chapterName' => htmlspecialchars(($data['chapterName'])),
            'content'=> htmlspecialchars($data['textAdmin']))
        );
    }

    public function delete($id){
        $this->request('DELETE FROM chapter WHERE id = ?', [$id]);
    }

    public function getChapters($min=null, $max=null) {
        return $this->request('
            SELECT id, chpNumber, chapterName, content, 
            DATE_FORMAT(creationDate, \'%d/%m/%Y\') AS chapterDate 
            FROM chapter ORDER BY id LIMIT '. $min .',' . $max
            );
    }

    //récupère la liste des chapitres sans limite
    public function getChaptersList() {
        return $this->request('SELECT * FROM chapter ORDER BY id');
    }
    
    public function getChapter($id) {
        return $this->request(
        'SELECT id, chpNumber, chapterName, content, DATE_FORMAT(creationDate, \'%d/%m/%Y\') 
                  AS chapterDate  FROM chapter WHERE id = ?', [$id]);
    }

    public function countChapters(){
        $res = $this->request('SELECT COUNT(*) As nbChapters FROM chapter');
        return $res[0][0];
      }

}

