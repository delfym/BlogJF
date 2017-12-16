<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 30/11/2017
 * Time: 15:46
 */

namespace App\Controller;

class Session
{
    public $session;

    public function __construct(){
        session_start();
    }

    public function destructSession(){
        session_destroy();
    }

    public function sessionVar($name, $value){
        $_SESSION[$name] = $value;
    }

}