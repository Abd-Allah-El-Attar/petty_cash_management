<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $project = $_POST['project'];
    $project_code = $_POST['project_code'];
    $description = $_POST['description'];

    try {
        require_once('dbh.inc.php');

        // Query to insert info into database
        $query = "INSERT INTO projects (project_name, project_code, description)
                    VALUES (:project_name, :project_code, :description);";

        // Sending query
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":project_name", $project);
        $stmt->bindParam(":project_code", $project_code);
        $stmt->bindParam(":description", $description);
        
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
