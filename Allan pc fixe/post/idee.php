<?php  include_once('../pdo.php'); ?>


<?php   

echo '<pre>'; print_r($_POST); echo '</pre>';


if($_POST){

    //extract($_POST);// $_POST['prenom'] dévient --> $prenom
}
?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Create Idee</title>
</head>
<body>
    <div class="container">

        <h1 class="text-center display-4">Proposé votre Idée</h1> <br>

        <form method="post" class="col-md-6 mx-auto">

                <div class="form-group col-md-6">
                    <label for="nomIdee">En-tête</label>
                    <input type="text" class="form-control" id="nomIdee" name="nomIdee">
                </div>
                <div class="form-group col-md-6">
                    <label for="dataIdee">Corps</label>
                    <textarea name="dataIdee" id="dataIdee" cols="100" rows="15"></textarea>
                    <!--
                    <textarea name="prenom" id="prenom" cols="40" rows="5"></textarea>
                    <input type="text" class="form-control" id="prenom" name="prenom">
                    -->
                </div>

            <button type="submit" class="btn btn-dark">Submit</button>
        </form>

    </div>

</body>
</html>