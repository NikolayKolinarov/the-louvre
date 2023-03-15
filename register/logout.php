<?php
    session_start();
    unset($_SESSION['loggedUser']);
    unset($_SESSION['loggedUserRole']);
    $previousPage = $_SERVER['HTTP_REFERER'];
    header("Location: $previousPage"); 
?>