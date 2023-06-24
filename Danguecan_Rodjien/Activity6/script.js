function closeAlert(alertId) {
    document.getElementById(alertId).style.display = "none";
}

function showEmptyFieldAlert() {
    closeAlert("invalidMessage");
    closeAlert("successMessage");
    document.getElementById("errorMessage").style.display = "block";
}

function showInvalidCredentialsAlert() {
    closeAlert("errorMessage");
    closeAlert("successMessage");
    document.getElementById("invalidMessage").style.display = "block";
}

function showSuccessAlert() {
    closeAlert("errorMessage");
    closeAlert("invalidMessage");
    document.getElementById("successMessage").style.display = "block";
}

function validateForm() {
    closeAlert("errorMessage");
    closeAlert("invalidMessage");
    closeAlert("successMessage");

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username.trim() == "" || password.trim() == "") {
        showEmptyFieldAlert();
        return false;
    }

    if (username !== "admin" || password !== "password") {
        showInvalidCredentialsAlert();
        return false;
    }

    showSuccessAlert();
    return false;
}

document.getElementById("loginBtn").addEventListener("click", function(event) {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    
    if (username.trim() == "" || password.trim() == "") {
        event.preventDefault();
        showEmptyFieldAlert();
    } else {
        closeAlert("errorMessage");
        closeAlert("invalidMessage");
        closeAlert("successMessage");
    }
});