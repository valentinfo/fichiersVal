<?php
extract($_POST);
//if (empty($idCompte) && !isset($idCompte)){header("location:login.php")}

include("pdo.php");
$connect = connect();
?>

<?php //***************************************************** idCompte
$sql = 'SELECT * FROM compte WHERE IDCOMPTE='.$idCompte;
$result = $connect->query($sql);
foreach ($result as $row) {
    echo $row["LASTNAME"] ." ". $row["FIRSTNAME"]. "\n";
}
?>

<form action="accueil.php" method="POST">

<?php //***************************************************** Categorie
if (isset($haveCat)){
    //echo "LISTE DES FICHES";

    // Récupérer $listCat -> déconcaténer les éléments par un '.'
    $param = "admin";

    $+$param
    $admin
//*************** */

}

function insertCheck($var)
{
    echo "<label for='".$var."'>".$var."</label>";
    echo "<input type='checkbox' id='".$var."' name='".$var."'  value='".$var."'>";
}

function addVal($var){$listCat = $listCat + $var}{

}


$sql= 'SELECT * FROM categorie';
$result = $connect->query($sql);

foreach ($result as $row) {
    insertCheck($row["NOMCAT"]);
    addVal(".".$row["NOMCAT"]);
}

//echo "<input type='checkbox' name=''>";
?>
<input type="hidden" name="idCompte" value = <?php echo $idCompte; ?>>
<input type="hidden" name="haveCat" value = 1>
<input type='hidden' name='listCat' value=<?php echo $listCat;?>>
<button type='submit'> SEARCH </button>
</form>
