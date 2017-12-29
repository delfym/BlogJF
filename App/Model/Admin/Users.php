<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 18/12/2017
 * Time: 09:05
 */

namespace App\Model\Admin;


class Users extends \App\Model\Model {
    private $username;
    private $password;

    public function addUser($login){
      //  $pass = htmlspecialchars($login['password']);
        $passHash = password_hash($login['password'], PASSWORD_DEFAULT);
        $this->request('INSERT INTO login(username, password) VALUES (:username, :password)',
        (array(
            'username' => htmlspecialchars($login['username']),
            'password' => $passHash
        )));
    }

    public function getUser($id){
    //    return $this->request('SELECT * FROM login');
       return $this->request('SELECT * FROM login WHERE id = ?', [$id]);
    }

    public function getUsers(){
        return $this->request('SELECT * FROM login');
    }

}