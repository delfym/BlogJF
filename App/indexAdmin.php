<?php

require 'Autoload.php';
\App\Autoload::register();

//require_once 'Controller/Admin/UserController.php';
$user = new App\Controller\Admin\UserController();
//echo '<pre>';
//var_dump($_POST);
try {
    if (isset($_GET['p'])) {
        if ($_GET['p'] == 'home') {
            $user->home();
            echo ' indexAdmin 1<br/>';
        } elseif ($_GET['p'] == 'login') {
            $user->setLogin();
            echo ' indexAdmin 2<br/>';
        } elseif ($_GET['p'] == 'chapterNew') {
            echo ' indexAdmin 3<br/>';
            $user->chapterNew();
        } elseif ($_GET['p'] == 'create') {
            echo ' indexAdmin 33<br/>';
            $user->create($_POST);
        }
    } elseif (isset($_POST['chapter'])) {
        echo ' indexAdmin 4<br/>';
            $user->chapter($_POST['chapterSelected']);
    } elseif (isset($_POST['update'])){
        echo ' indexAdmin 5<br/>';
        $user->update($_POST);
    } elseif (isset($_POST['delete'])){
        echo ' indexAdmin 6<br/>';
        $user->delete($_POST['id']);
    } elseif (isset($_POST['create'])){
        echo ' indexAdmin 7<br/>';
        $user->create($_POST);
    } else {
        echo 'je suis dans home<br/>';
        $user->home();
    }
}
catch (Exception $e) {
    echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
}

