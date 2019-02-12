<?php include 'minichat_bdd.php'; ?>

<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8" />
	<!-- Solution provisoire de rafraichissement de page automatique sans bouton toutes les 30s -->
	<meta http-equiv="Refresh" content="30">
	<!-- -------------------------------------------------------------------------- -->
	<title>Mon Mini Chat</title>
	<link href="style.css" rel="stylesheet">
</head>
<body>
	<h1>Mon Super MiniChat</h1><br />
	<p>Veuillez entrer votre message ci-dessous :</p>
	<!-- Solution de rafraichissement avec bouton -->
	<a href="minichat.php"><button>Rafraîchir</button></a>
	<!-- --------------------------------------------- -->
	<hr>
	<form action="minichat_post.php" method="post">
		Pseudo : <input type="text" name="pseudo" /> <br />
		Message : <input type="text" name="message" size="75px" />
		<input type="submit" value="Poster" />
	</form>
<?php 

// Récuparation des 10 derniers messages
$messages = $bdd->query('SELECT pseudo, message, date FROM chat ORDER BY id DESC LIMIT 0, 10');

// Affichage de chaque message (toutes les données protégées par htmlspecialchars)
while($donnees = $messages->fetch())
{
    echo '<p> ' . htmlspecialchars($donnees['date']) . ' / ' . '<strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}

// On ferme la requête pour qu'elle puisse être executée de nouveau
$messages->closeCursor();

?>
</body>
</html>