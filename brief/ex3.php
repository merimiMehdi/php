<!DOCTYPE html>
<html>
<head>

    <title>Document</title>
</head>
<body>
<form action="" method="POST">                                                
    <input type="text" name="nbr1" placeholder="Entrez le 1er nbr">
    <input type="text" name="nbr2" placeholder="Entrez le 2eme nbr">
    <input type="submit" value="Send" name="btn">
    </form>
<?php
          
             if(isset($_POST["nbr1"]) && isset($_POST["nbr2"])){            

               $nbr1 = $_POST["nbr1"];
               $nbr2 = $_POST["nbr2"];

               for ($i=0; $i<$nbr2; $i++ ){

                 echo "$nbr1 * $i =  " .$nbr1 * $i."<br>";
               }
            }
            ?>
   
</body>
</html>
