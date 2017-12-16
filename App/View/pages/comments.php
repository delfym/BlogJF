
<?php
//include("../CommentController.php"); //tests de variables
//ob_start();
?>
<div class="element1">
	<form class="formCom" action="../../commentsPost.php" method="post">
		<p>
        <label for="author">Pseudo : </label><input type="text" name="author" id="author" value=" <?= $_SESSION['author']; ?> "/>
        <input type="hidden" name="chapterId" value=" <?= htmlspecialchars($_SESSION['$chapterId']) ?>">
        </p>
        <label class="" for="comment">Mon message : </label><textarea class="" name="comment" rows="10" cols="80"></textarea>
        <br/><br/>
	</form>
    <button class="btn btn-default" type="submit" value="submit">Sauvegarder</button> <!--envoi des données à mySql-->

<br/>
<a id="lien" href = '../../home.php'>Retour vers la page d'accueil</a> <br/><br/>
	<!--En dessous, le script devra afficher les commentaires correspondant à cet article-->
</div>

<?php

$content = ob_get_clean();
require_once 'View/template.php';
