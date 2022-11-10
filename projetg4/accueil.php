<?php
session_start();

?>
<?php

extract($_POST);


echo"Bienvenue ". $_SESSION['login']." vous êtes bien connecté.";
?>