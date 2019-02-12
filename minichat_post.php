<?php include 'minichat_bdd.php'; 

// Insertion du message à l'aide de la requête préparée
if (isset($_POST['pseudo']) && $_POST['message']) {
    $ajout = $bdd->prepare('INSERT INTO chat(pseudo, message, date) VALUES(?, ?, NOW())');
    $ajout->execute(array($_POST['pseudo'], $_POST['message']));
}

// Redirection vers la page principale du chat
header('Location: minichat.php');