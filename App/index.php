<?php
session_start();

require 'Autoload.php';
\App\Autoload::register();

$page = new App\Controller\ChapterController();

try {
    if (!isset($_GET['p']) || !isset($_GET)) {
        $page->home();
    } elseif (isset($_GET)) {
        $page->chapter(htmlspecialchars($_GET['id']));
    }
}
catch (Exception $e) {
    echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
}

