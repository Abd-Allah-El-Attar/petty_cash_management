<!DOCTYPE html>
<html lang="en">
    <head>
        <script defer src="./dashboard_logic.js"></script>
        <link rel="stylesheet" href="./admin_dashboard.css">
    </head>

    <body>
        <main id="main-div">
            <div id="project-dropdown-div">
                <label id="project-select-label">Project: </label>
                <select class="button-styling" id="project-select">
                    <?php
                    include_once('./includes/db_dropdowns.php');
                    addProjectDropdown();
                    ?>
                </select>
                <button id="add-project-btn">Add Project</button>
            </div>

            <div id="expenses-table-div">
                Table
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