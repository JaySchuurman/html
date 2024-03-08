<?php

if($_POST['leeftijd'] < 18 ){
header("location: ../home.php");
}

else{
    echo'legal';
}

?>