<?php

require 'Autoload.php';
\App\Autoload::register();

//require_once 'Controller/Admin/UserController.php';
$user = new App\Controller\Admin\UserController();

try {
    if (isset($_GET['p'])){
        if ($_GET['p'] == 'home') {
            $user->home();
        } elseif ($_GET['p'] == 'login'){
            $user->setLogin();
        }
    } else {
        $user->home();
    }
}
catch (Exception $e) {
    echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
}

