<?php
function addProjectDropdown(){
    try {
        // Running query to get project names
        require('dbh.inc.php');

        $query = "SELECT project_name FROM projects;";

        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Creating HTML code for dropdown
        foreach($results as $row){
            $project_name = $row['project_name'];
            echo "<option value='" .$project_name. "'>" .$project_name. "</option>";
        }

        // Closing connection
        $pdo = null;
        $stmt = null;

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}

function addApproversDropdown(){
    try {
        // Running query to get project names
        require('dbh.inc.php');

        $query = "SELECT name FROM users WHERE is_admin=1;";

        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Creating HTML code for dropdown
        foreach($results as $row){
            $admin_name = $row['name'];
            echo "<option value='" .$admin_name. "'>" .$admin_name. "</option>";
        }

        // Closing connection
        $pdo = null;
        $stmt = null;

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
