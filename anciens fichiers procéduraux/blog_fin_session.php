<?php
session_start();
session_destroy();

// Puis rediriger vers minichat.php comme ceci :
header('Location: index.php');
exit;