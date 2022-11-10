<!DOCTYPE html>
<html lang="fr">
<?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>

<body>
<center>
<?php
$_SESSION["login"] = " ";

?>
<h4>Bienvenue sur votre espace de connexion !</h4>
<form action="verif.php" method="POST">
    <label>Nom d'utilisateur :</label>
    <input type="text" name="login" required>
    <br><br>
    <label>Mot de passe :</label>
    <input type="password" name ="mdp" required>
    <br><br>
    <a href="forminscription.php">S'inscrire</a>
    <button type ="submit">Valider</button>
</form>
</center>
</body>
</html>