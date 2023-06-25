let localUsername = "admin";
let localPassword = "password";

function login() {
    var adminInput = document.getElementById("username").value;
    var passwordInput = document.getElementById("password").value;

    if (adminInput === localUsername && passwordInput === localPassword) {
        showAlert("success", "Successfully Login");
    } else if (adminInput == "" | passwordInput === ""){
        showAlert("warning", "Please Input Username and Password");
    } else if(adminInput !== localUsername | passwordInput !== localPassword){
        showAlert("danger", "Invalid Username or Password");
    }
}

function showAlert(alertType, message) {
    var alertContainer = document.createElement("div");
    alertContainer.classList.add("alert", "alert-" + alertType);
    alertContainer.innerHTML = message;

    var container = document.querySelector(".container");
    container.appendChild(alertContainer);
}


