<!doctype html>
<html lang="fr" style="display:block;">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudfare?com/ajax/libs/jquery/3.2.1/jquery.js"> </script>
	<script src="https://kit.fontawesome.com/822c1912b7.js" crossorigin="anonymous"></script>
    
    <title>Formulaire</title>
    
</head>

<body>

<center>

<?php
    session_start();

    if (!empty($_SESSION['messageclear']))
    {
        ?>
        <div class="alert alert-success" role="alert" id="alert" >
           <?php echo $_SESSION['messageclear'] ." <i class='far fa-check-circle'></i>" ; $_SESSION['messageclear'] = null; ?>
        </div>
   <?php
    }

    if (!empty($_SESSION['messageerror']))
    {
        ?>
        <div class="alert alert-danger" role="alert" id="alert" >
            <?php echo $_SESSION['messageerror'] ." <i class='fas fa-times'></i>"; $_SESSION['messageerror'] = null; ?>
        </div>
    <?php
    }
?>

<form enctype="multipart/form-data" method="POST" action="envoiMail.php">

<br>

<div id="tous">
    <input type="checkbox" id="cTous" name="tlm" value="tous" >     
    <label for="tous">Tous les étages</label>
</div>
            
<br>              

<div class="multipleSelection">
    <div class="selectBox" 
        onclick="showCheckboxes()">
        <select>
            <option>Etages</option>
        </select>
        <div class="overSelect"></div>
    </div>

    <div id="checkBoxes">
        
        <label for="first">
            <input type="checkbox" id="e0" name="Etages[]" value ="0"/>
            0
        </label>

        <label for="first">
            <input type="checkbox" id="e1" name="Etages[]" value ="1"/>
            1
        </label>
            
        <label for="second">
            <input type="checkbox" id="e2" name="Etages[]" value ="2"/>
            2
        </label>
        <label for="third">
            <input type="checkbox" id="e3" name="Etages[]" value ="3"/>
            3
        </label>
        <label for="fourth">
            <input type="checkbox" id="e4" name="Etages[]" value ="4"/>
            4
        </label>
        <label for="first">
            <input type="checkbox" id="e5" name="Etages[]" value ="5"/>
            5
        </label>
            
        <label for="second">
            <input type="checkbox" id="e6" name="Etages[]" value ="6"/>
            6
        </label>
        <label for="third">
            <input type="checkbox" id="e7" name="Etages[]" value ="7"/>
            7
        </label>
        <label for="fourth">
            <input type="checkbox" id="e8" name="Etages[]" value ="8"/>
            8
        </label>
        <label for="first">
            <input type="checkbox" id="e9" name="Etages[]" value ="9"/>
            9
        </label>
            
        <label for="second">
            <input type="checkbox" id="e10" name="Etages[]" value ="10"/>
            10
        </label>
        <label for="third">
            <input type="checkbox" id="e11" name="Etages[]" value ="11"/>
            11
        </label>
        <label for="fourth">
            <input type="checkbox" id="e12" name="Etages[]" value ="12"/>
            12
        </label>
        <label for="first">
            <input type="checkbox" id="e13" name="Etages[]" value ="13"/>
            13
        </label>
            
        <label for="second">
            <input type="checkbox" id="e14" name="Etages[]" value ="14"/>
            14
        </label>
        <label for="third">
            <input type="checkbox" id="e15" name="Etages[]" value ="15"/>
            15
        </label>
        <label for="fourth">
            <input type="checkbox" id="e16" name="Etages[]" value ="16"/>
            16
        </label>
        <label for="fourth">
            <input type="checkbox" id="e17" name="Etages[]" value ="17"/>
            17
        </label>
        <label for="fourth">
            <input type="checkbox" id="e18" name="Etages[]" value ="18"/>
            18
        </label>
    </div>    
</div>

<br>

<div class="multipleSelection">
    <div class="selectBox" 
        onclick="showCheckboxes2()">
        <select>
            <option>Colonnes</option>
        </select>
        <div class="overSelect"></div>
    </div>

    <div id="checkBoxes2">
        
        <label for="first">
            <input type="checkbox" id="c1" name="Colonnes[]" value ="1"/>
            Colonne 1
        </label>

        <label for="first">
            <input type="checkbox" id="c2" name="Colonnes[]" value ="2"/>
            Colonne 2
        </label>
            
        <label for="second">
            <input type="checkbox" id="c3" name="Colonnes[]" value ="3"/>
           Colonne 3
        </label>
        <label for="third">
            <input type="checkbox" id="c4" name="Colonnes[]" value ="4"/>
           Colonne 4
        </label>
        

</div>
</div>
        <br>



<div id="bSelect">
    <select class="form-control-sm" name="EtagePair" id="cPI"> 
    <option value="0">Veuillez selectionner Pair/Impair</option>
    <option value="pair">Pair</option>
    <option value="impair">Impair</option>
    </select>
    <br>
</div>

<br>
<div class="mb-2">

<label for="txta" class="form-label">Texte du mail :</label>
<textarea class="form-control-lg" id="txta" name="texte" rows="2" ></textarea>
</div>

<br>
<div>
    <label>Code</label>
    <input class="form-control-sm" type="password" name="mdp" required >
</div>

<br>
<div class="mb-3">
    <label>Ajouter un fichier :</label>
    <input type="file" class="form-control-sm" name="fichier">
</div>

<br>
<input class="btn btn-primary" type="submit" value="Envoyer">
<input class="btn btn-danger" type="reset" value="Annuler">

</form>

</center>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="main.js" type="text/javascript"></script>
</body>