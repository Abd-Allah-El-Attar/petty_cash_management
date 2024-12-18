<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $receipt_type = $_POST['topup-expense-radio'];
    $project = $_POST['project-selector'];
    $department = $_POST['department'];
    $expense_type = $_POST['expense-type'];
    $expense_subtype = $_POST['expense-subtype'];
    $beneficiary = $_POST['beneficiary'];
    $approvers = $_POST['approvers-selector'];
    $amount = $_POST['amount'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $receipt = $_POST['receipt'];
    $approval_status = 'pending';   // All new expenses added are pending approval

    $input_user = $_SESSION['username'];

    try {
        require_once('dbh.inc.php');

        // Query to insert info into database
        $query = "INSERT INTO expenses (project, department, receipt_type, expense_type, expense_subtype, input_user
                  beneficiary, amount, description, approvers, receipt_date, receipt_img, approval_status) VALUES 
                  (:project, :department, :receipt_type, :expense_type, :expense_subtype, :input_user, :beneficiary, 
                  :amount, :description, :approvers, :date, :receipt, :approval_status);";

        // Sending query
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":project", $project);
        $stmt->bindParam(":department", $department);
        $stmt->bindParam(":receipt_type", $receipt_type);
        $stmt->bindParam(":expense_type", $expense_type);
        $stmt->bindParam(":expense_subtype", $expense_subtype);
        $stmt->bindParam(":input_user", $input_user);
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

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    echo "<script>window.close();</script>";
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expenses Added Successfully</title>
</head>
<body>
    <script>
        alert("Expense Submitted!");
        window.close();
    </script>
</body>
