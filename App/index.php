<?php
session_start();

require 'Autoload.php';
\App\Autoload::register();


$index = new \App\Controller\RouterUsers();
$index->Route();

