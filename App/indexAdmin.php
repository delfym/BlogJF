<?php

require 'Autoload.php';
\App\Autoload::register();

//require_once 'Controller/Admin/UserController.php';
$user = new App\Controller\Admin\UserController();

try {
    if (isset($_GET['p'])) {
        if ($_GET['p'] == 'home') {
            $user->home();
        } elseif ($_GET['p'] == 'login') {
            $user->setLogin();
        } elseif ($_GET['p'] == 'chapter') {
            //echo $_POST['chapterSelected'];
            $user->chapter($_POST['chapterSelected']);
        } elseif ($_GET['p'] == 'update') {
            $user->update($_GET['id']);
        }
 /*   } elseif (!empty($_POST['update'])){
        //echo '<pre>';
        //var_dump($_POST);
        $user->update();  */
    } else {
        $user->home();
    }
}
catch (Exception $e) {
    echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
}

