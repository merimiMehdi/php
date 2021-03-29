<!DOCTYPE html>
<html>
<head>
  
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
<input type="email" name="email" placeholder="Entrez votre Mail">
<input type="submit" name="btn">
</form>
<?php

if(isset($_POST["btn"])){
    $email=$_POST['email'];
    if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE')!==FALSE)
    $nom = "Internet explorer";
    elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Trident')!== FALSE)
    $nom = "Internet explorer";
    elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox')!== FALSE)
    $nom = "Mozilla Firefox";
    elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome')!== FALSE)
    $nom = "Google chrome";
    elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini')!== FALSE)
    $nom = "Opera Mini";
    elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera')!== FALSE)
    $nom = "Opera";
    elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari')!== FALSE)
    $nom = "Safari";
    else
    $nom = 'Something else';

    echo "your email is $email and your browser name is " .$nom;
}
?>
    
</body>
</html>