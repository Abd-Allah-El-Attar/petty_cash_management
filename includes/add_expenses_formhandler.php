<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $project = $_POST['project-selector'];
    $department = $_POST['department'];
    $beneficiary = $_POST['beneficiary'];
    $approvers = $_POST['approvers-selector'];
    $amount = $_POST['amount'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $receipt = $_POST['receipt'];
    $approval_status = 'pending';

    try {
        require_once('dbh.inc.php');

        $query = "INSERT INTO expenses (project, department, beneficiary, amount, description, 
                  approvers, receipt_date, receipt_img, approval_status) VALUES 
                  (:project, :department, :beneficiary, :amount, :description, 
                  :approvers, :date, :receipt, :approval_status);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":project", $project);
        $stmt->bindParam(":department", $department);
        $stmt->bindParam(":beneficiary", $beneficiary);
        $stmt->bindParam(":amount", $amount);
        $stmt->bindParam(":description", $description);
        $stmt->bindParam(":approvers", $approvers);
        $stmt->bindParam(":date", $date);
        $stmt->bindParam(":receipt", $receipt);
        $stmt->bindParam(":approval_status", $approval_status);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    echo "<script>window.close();</script>";
}