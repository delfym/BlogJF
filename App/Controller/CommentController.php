<?php
/*
session_start();

//test de la présence d'un pseudo saisi
$author = '';
if (isset ($_SESSION['$author'])) {
		$author = htmlspecialchars($_SESSION['$author']);
	}	

//test relatif à la réception d'un id billet via GET
	//gérer le cas zéro GET id
	$chapterId ='';
	if (isset($_GET['$chapterId'])) {
		$chapterId = htmlspecialchars($_GET['$chapterId']);
		$_SESSION['$chapterId'] = $_GET['$chapterId'];
	}
	else {
		$chapterId = htmlspecialchars($_SESSION['$chapterId']);//permet de repasser le paramètre id
	}
*/