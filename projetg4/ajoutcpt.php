<?php
extract($_POST);
require("fonctions.php");
$bdd=connect();

     
     
	 
     
$sql="insert into compte(lastname,firstname,username,mailCompte,mdp) values ('$lastname','$firstname','$login','$mail',md5('$mdp'))";



$resultat=$bdd ->query($sql);
$nb_lignes= $resultat-> rowcount();
if($nb_lignes == 0){

   header("location:echecinscription.php");
}
else if($nb_lignes == 1){
      
   header("location:index.php");
}



?>