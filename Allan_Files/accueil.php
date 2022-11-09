<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>

    <?php
        global $listCat;
        global $totalCat;

        print_r($_POST);
    ?>
    <?php
        extract($_POST);
        include("pdo.php");
        $connect = connect();
    ?>
</head>
<body>
    <?php //***************************************************** idCompte
        /*
        $sql = 'SELECT * FROM compte WHERE IDCOMPTE='.$idCompte;
        $result = $connect->query($sql);
        foreach ($result as $row) {
        echo $row["LASTNAME"] ." ". $row["FIRSTNAME"]. "<br><br>";
        }*/
    ?>

    <br><br>
    ---------------------------------------------------------
    <br><br>

    <form action="accueil.php" method="POST">

    <?php ////******** Début CHECKBOX
        if(!isset($listCat)){$listCat = "";}


        if (isset($haveCat))
        {
            $list = $GLOBALS['totalCat'];
            $catArray = explode(".", $list);

            $CATEGORIEFICHE_value = "";

            foreach ($catArray as $item) {
                if(isset($$item))
                {
                    $CATEGORIEFICHE_value = $CATEGORIEFICHE_value . "." .$$item;
                }
            }

            $sql= 'SELECT * FROM fiche WHERE CATEGORIEFICHE=\''.$CATEGORIEFICHE_value.'\'';
            try{
                $resultFICHE = $connect->query($sql);
                foreach ($resultFICHE as $row) {
                    echo "[ ".$row["IDFICHE"] ." : ".$row["CATEGORIEFICHE"]." : ".$row["NOMFICHE"]." ]"."<br><br>";
                }
            }
            catch (Exception $E){
                // traitement des erreurs
            }
    
        }

        function insertCheck($var)
        {
            echo "<label for='".$var."'>".$var."</label>";
            echo "<input type='checkbox' id='cat_".$var."' name='cat_".$var."'  value='".$var."'>";
        }

        function addCat($var)
        {
            $GLOBALS['listCat'] = $GLOBALS['listCat'].$var;
            $GLOBALS['totalCat'] = $GLOBALS['listCat'];
        }

        $sql= 'SELECT * FROM categorie';
        $resultCAT = $connect->query($sql);

        foreach ($resultCAT as $row) {
            insertCheck($row["NOMCAT"]);
            addCat(".cat_".$row["NOMCAT"]);
        }
        //******** FIN CHECKBOX
    ?>

        <input type="hidden" name="idCompte" value = <?php echo $idCompte; ?>>
        <input type="hidden" name="haveCat" value = 1>
        <input type='hidden' name='totalCat' value=<?php echo $totalCat;?>>
        <button type='submit'> SEARCH </button>
    </form>

    <br><br>
    ---------------------------------------------------------
    <br><br>


</body>
</html>



