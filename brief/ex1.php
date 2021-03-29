<!DOCTYPE html>
<html>
<head>    
    <title>Document</title>
</head>
<body>
<form action="" METHOD="POST">
    <input type="text" name="n1" placeholder="number1">
    <input type="text" name="n2" placeholder="number2">
    <input type="submit" name="a" value="ADD +">
    <input type="submit" name="m" value="MUL *">
    <input type="submit" name="d" value="DIV /">
    <input type="submit" name="s" value="SUB -">
</form>
<?php

if(isset($_POST['a'])){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $add = $n1+$n2;
    echo "This operation equals<br>".$add;
}
if(isset($_POST['m'])){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $mul = $n1*$n2;
    echo "This operation equals<br>".$mul;
}
if(isset($_POST['d'])){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $div = $n1/$n2;
    echo "This operation equals<br>".$div;
}
if(isset($_POST['s'])){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $sub = $n1-$n2;
    echo "This operation equals".$sub;
}
?> 

</body>
</html>
