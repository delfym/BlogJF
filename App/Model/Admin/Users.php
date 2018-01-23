<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 18/12/2017
 * Time: 09:05
 */

namespace App\Model\Admin;


class Users extends \App\Model\Model {

    public function addUser($login){
      //  $pass = htmlspecialchars($login['password']);
        $passHash = password_hash($login['password'], PASSWORD_DEFAULT);
        $this->request('INSERT INTO login(username, password) VALUES (:username, :password)',
        (array(
            'username' => htmlspecialchars($login['username']),
            'password' => $passHash
        )));
    }

    public function updateUser($login){
        $passHash = password_hash($login['password'], PASSWORD_DEFAULT);
        $this->request('UPDATE login SET username = :username, password = :password WHERE id = '. $login['userId'],
            (array(
                'username' => htmlspecialchars($login['username']),
                'password' => $passHash
            )));
    }

    public function getUser($id){
       return $this->request('SELECT * FROM login WHERE id = ?', [$id]);
    }

    public function getUsers(){
        return $this->request('SELECT * FROM login');
    }

    public function deleteUser($id){
        $this->request('DELETE FROM login WHERE id = ?', [$id]);
    }

}