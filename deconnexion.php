<?php  
    session_start();

    session_unset();  // Vider les variables de sessions 

    session_destroy(); // pour finir la session

    header('location:login.php');
?>