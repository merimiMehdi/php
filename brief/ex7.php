<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
<form action="ex7.php" method="POST" enctype="multipart/form-data">
<input type="file" name="fichier">
<input type="submit" value="Send" name="upload">
</form>
<?php
if(isset($_POST["upload"])){
    if($_FILES["fichier"]["size"] < 1000000 && $_FILES["fichier"]["type"] == "application/x-zip-compressed" ){
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fichier"]["name"]);
        if (move_uploaded_file($_FILES['fichier']['tmp_name'], $target_file)) {
            echo "Le fichier est valide, et a été téléchargé
                   avec succès. Voici plus d'informations :\n";
        } else {
            echo "Attaque potentielle par téléchargement de fichiers.
                  Voici plus d'informations :\n";
        }
    }
    }
     ?> 
</body>
</html>