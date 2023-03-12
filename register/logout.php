<?php
    session_start();
    unset($_SESSION['loggedUser']);
    unset($_SESSION['loggedUserRole']);
    header("Location: ../home/home.php"); 
?>