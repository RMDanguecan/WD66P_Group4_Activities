function registerFormSubmit(event) {
    event.preventDefault();

    const firstNameInput = document.getElementById('firstName');
    const lastNameInput = document.getElementById('lastName');
    const birthdayInput = document.getElementById('birthday');
    const addressInput = document.getElementById('address');
    const cityInput = document.getElementById('city');
    const provinceInput = document.getElementById('province');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirmPassword');
    const subscribeCheckbox = document.getElementById('subscribeCheckbox');

    const outputElement = document.getElementById('output');

    if (passwordInput.value !== confirmPasswordInput.value) {
        outputElement.textContent = "You cannot proceed to your account because your password does not match";
        return;
    }

    const firstName = capitalize(firstNameInput.value);
    const lastName = capitalize(lastNameInput.value);
    const address = capitalize(addressInput.value);
    const city = capitalize(cityInput.value);
    const province = capitalize(provinceInput.value);

    let output = `Hi ${firstName} ${lastName}\n`;
    output += "Welcome to Project Nexus\n";
    output += `Your Birthday is = ${birthdayInput.value}\n`;
    output += `You are currently residing at ${address}, ${city}, ${province}\n`;
    output += `Your email is "${emailInput.value}"\n`;

    if (subscribeCheckbox.checked) {
        output += "Thanks for subscribing to our latest news\n";
    }

    output += "Thank you for registering";

    outputElement.textContent = output;
}

function capitalize(str) {
    return str.replace(/\b\w/g, (char) => char.toUpperCase());
}