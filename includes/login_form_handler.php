<?php

session_start();

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (!empty($username) && !empty($password)){
        try {
            require_once("dbh.inc.php");

            // Query to get user info
            $query = "SELECT username, pwd, is_admin FROM users
            WHERE (username=:username AND pwd=:password);";
            
            $stmt = $pdo->prepare($query);

            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $password);

            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if(empty($results)){
                // User invalid
                header('Location: ../index.html');
            }
            else{
                $results = $results[0]; // take the first user with given info
                // Input info is correct, login to correct page
                if($results['is_admin']){
                    header('Location: ../admin_dashboard.php');
                }
                else{
                    header('Location: ../user_dashboard.php');
                }
            }
        
        } catch (PDOException $e) {
            die("Query failed: ". $e->getMessage());
        }
    }
}
else {
    header("Location: ../login_page.html");
}