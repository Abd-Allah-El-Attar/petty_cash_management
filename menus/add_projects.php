<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./menu_style.css">
        <script type="module" defer src="./menu_logic.js"></script>
        <title>Add Project</title>
    </head>

    <body>
        <form action="../includes/add_projects_formhandler.php" method="post">
            <div id="form-div">
                <label for="project">Project: </label>
                <input type="text" name="project" id="project-input">
                
                <label for="project-code">Project Code: </label>
                <input type="text" name="project-code" id="project-code-input">

                <label for="department">Department: </label>
                <select name="department" id="department-select"></select>

                <label for="description">Description: </label>
                <input type="text" name="description" id="description-input">
            </div>

            <div id="output-buttons-div">
                <input type="submit" name="submit-btn" id="submit-btn" value="Add">
                <button type="button" id="cancel-btn">Cancel</button>
            </div>
        </form>
    </body>
</html>