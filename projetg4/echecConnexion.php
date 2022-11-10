<!DOCTYPE HTML>
<HTML>
<?php
session_start();
?>
<head>
    <title>Connexion</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
    <body>
    <?php
$_SESSION["login"] = " ";

?>
    <center>
    <h3>Identifiant et/ou mot de passe incorrect !</h3>
    <form action="verif.php" method="POST">
    <br />
    <label>Identifiant :</label><br />
    <input type="text" name="login" placeholder="Identifiant"><br />
    <label>Mot de passe :</label><br />
    <input type="password" name="mdp" placeholder="Mot de passe"><br /><br />
    <button type="submit" class="btn btn-primary">Se connecter</button>
    </center>
    </form>
    </body>

</HTML>
