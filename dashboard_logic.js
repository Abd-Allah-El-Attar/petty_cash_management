"use strict";

// Open menus when buttons are pressed
let generate_summary_btn = document.getElementById("generate-summary-btn");
let add_expenses_btn = document.getElementById("add-expenses-btn");
let add_project_btn = document.getElementById("add-project-btn");

// Generate summary button functionality
generate_summary_btn.addEventListener('click', (e) => {
    let popup_window = window.open("./menus/generate_summary.php", "", "width=500,height=300");
})

// Add expenses button functionality
add_expenses_btn.addEventListener('click', (e) => {
    let popup_window = window.open("./menus/add_expenses.php", "", "width=500,height=300");
})

// Add project button functionality
if (add_project_btn != null){
    add_project_btn.addEventListener('click', (e) => {
        let popup_window = window.open("./menus/add_projects.php", "", "width=500,height=300")
    })
}

// Add options to department selector
let department_selector = document.getElementById("department-select");

fetch("http://localhost/petty_cash_management/includes/departments.json")
.then(response => response.json())
.then(data => {
    if (department_selector != null){
        let departments = data['departments'];
        for(let i in departments){
            let new_option = new Option();
            let department = departments[i];
            new_option.value = department;
            new_option.innerHTML = department;
            department_selector.appendChild(new_option);
        }
    }
});
