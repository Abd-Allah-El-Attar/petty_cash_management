<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./generate_summary.css">
        <script defer src="./generate_summary.js"></script>
        <title>Add Project</title>
    </head>

    <body>
        <form action="../includes/generate_summary_formhandler.php" method="post">
            <div id="form-div">
                <label for="project-selector">Project: </label>
                <!-- <select name="project-selector" id="project-select"></select> -->
                <select name="project-selector" id="project-select">
                    <?php 
                    include_once('../includes/db_dropdowns.php');
                    addProjectDropdown();
                    ?>
                </select>
                <label for="amount">Amount: </label>
                <input type="number" name="amount" id="amount-input">

                <label for="beneficiary">Beneficiary: </label>
                <input type="text" name="beneficiary" id="beneficiary-input">

                <label for="date-from">Date from: </label>
                <input type="date" name="date-from" id="date-from-input">
                
                <label for="date-to">Date to: </label>
                <input type="date" name="date-to" id="date-to-input">
            </div>

            <div id="output-buttons-div">
                <input type="submit" name="csv-btn" id="csv-btn" value="CSV">
                <input type="submit" name="pdf-btn" id="pdf-btn" value="PDF">
                <button type="button" id="cancel-btn">Cancel</button>
            </div>
        </form>
    </body>

</html>