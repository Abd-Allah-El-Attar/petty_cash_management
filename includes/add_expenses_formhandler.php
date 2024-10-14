<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $project = $_POST['project-selector'];
    $department = $_POST['department'];
    $beneficiary = $_POST['beneficiary'];
    $amount = $_POST['amount'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $receipt = $_POST['receipt'];

    try {
        require_once('dbh.inc.php');

        $query = "INSERT INTO expenses (project, department, beneficiary, amount, description, 
                  approvers, receipt_date, receipt_img, approval_status) VALUES 
                  (?, ?, ?, ?, ?, ?, ?, ?, ?);";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$project, $department, $beneficiary, $amount, $description, 
                                "Admin User", $date, $receipt, false]);

        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header('');
}