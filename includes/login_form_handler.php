<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (!empty($username) && !empty($password)){
        try {
            require_once("dbh.inc.php");
            $query = "SELECT username, FROM users";
        } catch (PDOException $e) {
            die("Query failed: ". $e->getMessage());
        }
    }
}
else {
    header("Location: ../login_page.html");
}