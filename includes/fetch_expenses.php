<?php

try {
    // Running query to get project names
    require('dbh.inc.php');

    $query = "SELECT * FROM expenses ORDER BY receipt_date;";

    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);


    // Creating HTML code for dropdown
    foreach($results as $row){
        echo "<tr>";

        echo "<td>" .$row['project']. "</td>";
        echo "<td>" .$row['department']. "</td>";
        echo "<td>" .$row['beneficiary']. "</td>";
        echo "<td>" .$row['amount']. " QAR</td>";
        echo "<td>" .$row['description']. "</td>";
        echo "<td>" .$row['receipt_img']. "</td>";
        echo "<td>" .$row['approval_status']. "</td>";

        echo "</tr>";
    }

    // Closing connection
    $pdo = null;
    $stmt = null;

} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}