<?php
    session_start();
   

    echo "<pre>";
    var_dump($_GET);
    echo "<pre>";

    $name = $_GET["name"];
    $email = $_GET["email"];
    $password = $_GET["password"];
   

 
    $registerErrors = array();

    if(strlen($password) < 5){
        $registerErrors[] = "Invalid password lenght !";
    }


    if(count($registerErrors) != 0){
        unset($_SESSION["registerErrors"]);
        $_SESSION["registerErrors"] = $registerErrors;
        header("Location: signIn.php");
        die();
    }else{
       
        $servername = "localhost";
        $dbusername = "root";
        $dbPassword = "";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=thelouvre", $dbusername, $dbPassword);
           
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "INSERT INTO users (name,`pass`,`email`) VALUES (?,?,?)";

            $stmt= $conn->prepare($sql);
            $stmt->execute([$name, $password, $email]);
            header("Location: ../home/home.php");
            die();  
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }    
    } 
?>
