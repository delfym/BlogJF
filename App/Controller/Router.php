<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 26/12/2017
 * Time: 23:21
 */

namespace App\Controller;


class Router
{
    protected $page;
    protected $user;
    protected $auth;

    public function __construct()
    {
        $this->page = new ChapterController();
        $this->user = new Admin\AdminController();
        $this->auth = new Admin\Auth();
    }
}