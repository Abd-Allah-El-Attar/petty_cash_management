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

let submit_btn = document.getElementById("submit-btn");
let cancel_btn = document.getElementById("cancel-btn");

// Cancel button functionality
cancel_btn.addEventListener('click', (e) => {
    window.close();
})

// Submit button functionality
