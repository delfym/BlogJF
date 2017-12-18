<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 18/12/2017
 * Time: 09:05
 */

namespace App\Model;


class Users extends Model
{
    private $username;
    private $password;

    public function addUser(){
        $this->request('INSERT INTO login(username, password) VALUES (:username, :password)',
        (array(
            'user' => htmlspecialchars($_POST ['user']),
            'password' => htmlspecialchars($_POST['password'])
        )));
    }

    public function getUser(){
        return $this->request('SELECT * FROM login');
    }

}