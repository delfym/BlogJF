<?php
session_start();

require 'Autoload.php';
\App\Autoload::register();

$page = new App\Controller\ChapterController();
$user = new App\Controller\Admin\UserController();
$log = new \App\Controller\Admin\Auth();

try {
    if (isset($_GET['p'])){
        if ($_GET['p'] == 'post') {
            $page->post();
        } elseif (isset($_GET) && !empty($_GET['id'])) {
            $page->chapter(htmlspecialchars($_GET['id']));
        } elseif ($_GET['p'] == 'login') {
            $log->setLogin();
        } elseif  ($_GET['p'] == 'chapter'){
            $page->chapter($_GET['id']);
        }elseif  ($_GET['p'] == 'home'){
            $page->home();
        }
    } else {
        $page->home();
    }
}
catch (Exception $e) {
    echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
}

