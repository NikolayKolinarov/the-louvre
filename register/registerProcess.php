<?php
    session_start();

    $logMail = $_GET["email"];
    $logPass = $_GET["password"];

    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "thelouvre";

    try {
        $connection = new PDO("mysql:host=$servername;dbname=$dbName",$dbUsername,$dbPassword);
        $connection -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $PDOstatement = $connection->prepare("SELECT * FROM user");
        $PDOstatement -> execute();

        $PDOstatement -> setFetchMode(PDO::FETCH_ASSOC);
        $data = $PDOstatement -> fetchAll();

        for($i = 0; $i < count($data); $i++){
            $currentRow = $data[$i];
            $id = $currentRow["userId"];
            $username = $currentRow["name"];
            $email = $currentRow["email"];
            $password = $currentRow["pass"];
            $userType = $currentRow["userType"];

            if ($logMail == $email && $logPass == $password) {
                unset($_SESSION["loginSuccess"]);
                $_SESSION["loginSuccess"] = "loginSuccess";

                unset($_SESSION["loggedUserID"]);
                $_SESSION["loggedUserID"] = $id;

                unset($_SESSION["username"]);
                $_SESSION["loggedUser"] = $username;

                unset($_SESSION["loggedUserRole"]);
                $_SESSION["loggedUserRole"] = $userType;

                header("Location: ../home/home.php");
                die();
            }
        }

    } catch(PDOException $e) {
        echo "Connection failed: ". $e -> getMessAge();
    }

    unset($_SESSION["loginError"]);
    $_SESSION["loginError"] = "loginError";
    header("Location: logIn.php");
?>