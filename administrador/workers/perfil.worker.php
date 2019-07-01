<?php 


if(isset($_SESSION["sessiousuari"]) || isset($_SESSION["sessiopassword"])){
    
    
    
    echo $_SESSION["sessiousuari"];
    echo $_SESSION["sessiopassword"];
    
    
    echo '<a href="logout.php">Logout</a>';
    
    
} else {
    
   echo 'no hay sesion';
}
