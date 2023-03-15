<?php
    session_start();
   
    $name = $_GET["name"];
    $email = $_GET["email"];
    $password = $_GET["password"];
   
    $registerErrors = array();

    if(strlen($password) < 5){
        $registerErrors[] = "Invalid password length!";
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

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO user (name, `pass`, `email`, `userType`) VALUES (?,?,?,?)";
            $stmt= $conn->prepare($sql);
            $stmt->execute([$name, $hashed_password, $email, 'user']);
            header("Location: register.php");
            die();  
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }    
    } 
?>
