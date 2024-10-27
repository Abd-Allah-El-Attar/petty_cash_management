<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Expenses Form</title>
    <link rel="stylesheet" href="./menu_style.css">
    <script defer src="./menu_logic.js"></script>
</head>
<body>
    <form action="../includes/add_expenses_formhandler.php" id="expenses-form" method="post">
        <div id="form-div">
            
            <div id="topup-radio-div">
                <input type="radio" name="topup-expense-radio" id="topup-radio" value="Topup">
                <label for="topup-radio">Topup</label>
            </div>
            
            <div id="expense-radio-div">
                <input type="radio" name="topup-expense-radio" id="expense-radio" value="Expense">
                <label for="expense-radio">Expense</label>
            </div>

            <label for="project-selector">Project: </label>
            <select name="project-selector" id="project-select">
                <?php
                    include_once("../includes/db_dropdowns.php");
                    addProjectDropdown();
                ?>
            </select>

            <label for="department">Department: </label>
            <select name="department" id="department-select"></select>

            <label for="expense-type">Expense Type: </label>
            <div>
                <select name="expense-type" id="expense-type-select"></select>
                <select name="expense-subtype" id="expense-subtype-select"></select>
            </div>

            <label for="beneficiary">Beneficiary: </label>
            <input type="text" name="beneficiary" id="beneficiary-input">

            <label for="approvers">Approvers: </label>
            <select multiple name="approvers-selector" id="approvers-select">
                <?php
                addApproversDropdown();
                ?>
            </select>

            <label for="amount">Amount: </label>
            <input type="number" name="amount" id="amount-input">

            <label for="description">Description: </label>
            <input type="text" name="description" id="description-input">

            <label for="date">Date: </label>
            <input type="date" name="date" id="date-input">

            <label for="receipt">Receipt: </label>
            <input type="file" name="receipt" id="receipt-input">
        </div>

        <div id="output-buttons-div">
            <input type="submit" name="submit-btn" id="submit-btn" value="Add">
            <button type="button" id="cancel-btn">Cancel</button>
        </div>
    </form>

    
</body>
</html>