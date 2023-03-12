<?php 
session_start();

$sql = "SELECT * FROM exhibits";

if (isset($_GET['category']) == "All") {
    $_SESSION['selectedCategory'] = $_GET['category'];
    $category = $_GET['category'];
    $sql = "SELECT * FROM exhibits WHERE Category = '$category'";
} 
    
$_SESSION["sqlFilter"] = $sql;

header('Location: gallery.php');
?>