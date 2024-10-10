"use strict";

let project_options = ["Project 1", "project 2"];

let project_selector = document.getElementById("project-select");

for (let i in project_options){
    let new_option = new Option();
    let project = project_options[i];

    new_option.value = project;
    new_option.innerHTML = project;
    project_selector.appendChild(new_option);
}

// Open menus when buttons are pressed
let generate_summary_btn = document.getElementById("generate-summary-btn");
let add_expenses_btn = document.getElementById("add-expenses-btn");

generate_summary_btn.addEventListener('click', (e) => {
    let popup_window = window.open("./menus/generate_summary.html", "", "width=500,height=300");
})

add_expenses_btn.addEventListener('click', (e) => {
    let popup_window = window.open("./menus/add_expenses.html", "", "width=500,height=300");
})
