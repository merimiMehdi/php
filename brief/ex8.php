<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
<input type="submit" value="Vendre"  name="btn_vendre">
<input type="submit" value="Acheter" name="btn_acheter" >
<input type="submit" value="Louer" name="btn_louer" >
</form>
<?php
if(isset($_POST["btn_vendre"])){
  header('Location: ex7.php'); 
}
if(isset($_POST["btn_acheter"])){
    header('Location: ex5.php'); 
  }
  if(isset($_POST["btn_louer"])){
    header('Location: ex6.php'); 
  }
?>    
</body>
</html>