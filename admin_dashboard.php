<!DOCTYPE html>
<html lang="en">
    <head>
        <script defer src="./dashboard_logic.js"></script>
        <link rel="stylesheet" href="./user_dashboard.css">
    </head>

    <body>
        <main id="main-div">
            <div id="department-dropdown-div">
                <label id="department-select-label">Department: </label>
                <select class="button-styling" name="department-select" id="department-select"></select>
                <button id="add-project-btn">Add Project</button>
            </div>

            <div id="expenses-table-div">
                <table id="expenses-table">
                    <th>Project</th>
                    <th>Department</th>
                    <!-- <th>Input User</th> -->
                    <th>Beneficiary</th>
                    <th>Amount</th>
                    <th>Description</th>
                    <th>Receipt</th>
                    <th>Approval Status</th>

                    <?php include_once('./includes/fetch_expenses.php'); ?>
                </table>
            </div>

            <div id="balances-div">
                <div class="balance-field" id="approved-balance-div">Approved</div>
                <span id="approved-num"></span>
                <div class="balance-field" id="summarized-balance-div">Summarized</div>
                <span id="summarized-num"></span>
                <div class="balance-field" id="actual-balance-div">Actual</div>
                <span id="actual-num"></span>
            </div>

            <div id="bottom-buttons-div">
                <div id="generate-summary-div">
                    <button class="button-styling" id="generate-summary-btn">Generate Summary</button>
                </div>

                <div id="add-expenses-div">
                    <button class="button-styling" id="add-expenses-btn">Add Expense</button>
                </div>
            </div>

        </main>
    </body>
</html>