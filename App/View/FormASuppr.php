

<!--minichat.php : contient le formulaire permettant d'ajouter un message et liste les 10 derniers messages ;
minichat_post.php : insère le message reçu avec$_POST dans la base de données puis redirige vers minichat.php.-->
<p>
	<form action="" method="post">
		<label>Titre du chapitre : </label> : <input type="text" name="title"/>
		<br/><br/>
		<label for="content">Mon message<textarea name="content" class = "colorBoxComm" rows="10" cols="100"></textarea></label>
		<br/><br/>
		<input type="submit" value="Envoyer"/> <!--envoi des données à mySql-->
	</form>

	<!-- Ajout d'un bouton de retour pour tester des modifs sur la session  -->
	<form action="../blog_fin_session.php" method= "post">
		<input type="submit" name="fin" value="Fermer la session">
	</form>

	<!--En dessous, le script devra afficher les 10 derniers messages qui ont été enregistrés en allant du plus récent au plus ancien.-->
<p>