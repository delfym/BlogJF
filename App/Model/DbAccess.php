<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 29/11/2017
 * Time: 16:50
 */
namespace App\Model;

class DbAccess {
    private $pdo;
    private $db_host,
            $db_name,
            $db_user,
            $db_pass;

    public function __construct($db_name='blogJF', $db_user = 'root', $db_pass ='root' , $db_host ='localhost') {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    public function getPDO() {
        if ($this->pdo === null) {
            $pdo = new \PDO('mysql:dbname=blogJF;host=localhost', 'root', 'root');
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

}