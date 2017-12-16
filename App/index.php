<?php
session_start();

require 'Autoload.php';
\App\Autoload::register();

$page = new App\Controller\ChapterController();
try {
    if (isset($_GET['p'])){
        if ($_GET['p'] == 'post') {
          //  $page->post($_POST);
            $page->post();
        } elseif (isset($_GET)) {
            $page->chapter(htmlspecialchars($_GET['id']));
        }

    } else {
        $page->home();
    }
}
catch (Exception $e) {
    echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
}

