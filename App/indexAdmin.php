<?php
session_start();

/*require 'Autoload.php';
\App\Autoload::register();
*/
//$page = new App\Controller\ChapterController();
$user = new App\Controller\Admin\UserController();

try {
    if (isset($_GET['p'])){
        if ($_GET['p'] == 'home') {
            $user->home();
        //} elseif (isset($_GET) && !empty($_GET['id'])) {
            //$page->chapter(htmlspecialchars($_GET['id']));
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

