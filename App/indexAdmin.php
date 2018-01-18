<?php
session_start();

require 'Autoload.php';
\App\Autoload::register();


    $indexAdmin = new \App\Controller\Admin\RouterAdmin();
    $indexAdmin->Route();

