<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<form action="ex2php.php" method="post">
<input type="text" name="Nom" placeholder="Entrez votre nom">
<input type="radio" name="personne" value="F">f
<input type="radio" name="personne" value="M">m
<input type="submit" value="Send">
</form>
<?php
if(isset($_POST["Nom"]) && isset($_POST["personne"])){
    $r_fem = $_POST["personne"];
    $r_mas = $_POST["Nom"];

    if($r_fem == "F"){
        echo "Bonjour Mme BNSSNSS.$r_fem";
    }
    elseif($r_mas == "M"){
        echo "Bonjour Mr .$r_fem";
    }
}
?>
</body>
</html>
