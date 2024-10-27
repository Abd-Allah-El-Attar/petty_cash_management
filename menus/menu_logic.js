"use strict";

// import departments from "../includes/departments.json";
let submit_btn = document.getElementById("submit-btn");
let cancel_btn = document.getElementById("cancel-btn");

// Cancel button functionality
cancel_btn.addEventListener('click', (e) => {
    window.close();
})

let populateExpenseSubtypes = () => fetch("http://localhost/petty_cash_management/includes/expense_types.json")
.then(response => response.json())
.then(data => {
    let expense_subtypes = data[expense_type_selector.value];
    
    for(let i in expense_subtypes){
        let new_option = new Option();
        let expense_subtype = expense_subtypes[i];
        new_option.value = expense_subtype;
        new_option.innerHTML = expense_subtype;
        expense_subtype_selector.appendChild(new_option);
        }
    }
);

// Add options department menu
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

// Add options to expense type selector
let expense_type_selector = document.getElementById("expense-type-select");
let expense_subtype_selector = document.getElementById("expense-subtype-select");

if (expense_type_selector != null && expense_subtype_selector != null){ // Check if both these selectors exist
    fetch("http://localhost/petty_cash_management/includes/expense_types.json")
    .then(response => response.json())
    .then(data => {
        let expense_types = Object.keys(data);
        for(let i in expense_types){
            let new_option = new Option();
            let expense_type = expense_types[i];
            new_option.value = expense_type;
            new_option.innerHTML = expense_type;
            expense_type_selector.appendChild(new_option);
            }

        populateExpenseSubtypes();
        }
    );

    // Change options based on expense type
    expense_type_selector.addEventListener('change', (e) => {
        // Remove all children of expense subtype selector
        while (expense_subtype_selector.firstChild){
            expense_subtype_selector.lastChild.remove();
        }
        
        // Search in JSON for list of subtypes based on selection type
        populateExpenseSubtypes();
    })
}

