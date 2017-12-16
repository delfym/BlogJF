<?php  
session_start();


// Effectuer ici la requête qui insère le commentaire
$req = $bdd->prepare('INSERT INTO comments (author, comment, commentDate, chapterId) VALUES (:author, :comment, NOW(), :chapterId)');

$req->execute(array(
	'author' => htmlspecialchars($_POST['author']),
	'CommentManager' => htmlspecialchars($_POST['CommentManager']),
    'chapterId' => htmlspecialchars($_POST['chapterId'])
	));

$_SESSION['author'] = htmlspecialchars($_POST['author']);
 
$req->closeCursor();

// Puis rediriger vers index.php comme ceci :
header('Location: commentsList.php');

exit;


