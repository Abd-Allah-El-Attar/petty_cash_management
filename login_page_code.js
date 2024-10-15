"use strict";

// TODO: Incorporate username and passwords into database rather than hard-coding them

let loginForm = document.getElementById("login_form");
let loginButton = document.getElementById("sub_button");
let loginErrorMsg = document.getElementById("incorrect_info_div");

// loginButton.addEventListener("click", (e) => {
//     e.preventDefault();
//     let username = loginForm.username.value;
//     let password = loginForm.password.value;

//     for(let username_key in users_dict){
//         if (username_key == username && users_dict[username_key].password == password) {
//             // Successful login to user or admin dashboard
//             let redirect = (users_dict[username_key].is_admin) ? "./admin_dashboard.php" : "./user_dashboard.php"
//             window.location.href = redirect
//         } else {
//             // Error message shows up when invalid username / password are given
//             loginErrorMsg.style.display = "block";
//         }
//     }
// })

