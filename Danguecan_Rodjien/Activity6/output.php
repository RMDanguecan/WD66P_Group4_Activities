<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $email = strtolower($_POST['email']);
    $subscribe = isset($_POST['subscribeCheckbox']);

    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $passwordMatch = ($password === $confirmPassword);

    if ($passwordMatch) {

        $firstName = ucfirst(strtolower($firstName));
        $lastName = ucfirst(strtolower($lastName));
        $address = ucwords(strtolower($address));
        $city = ucwords(strtolower($city));
        $province = ucwords(strtolower($province));

        $output = "Hi $firstName $lastName\n";
        $output .= "Welcome To Project Nexus\n";
        $output .= "Your Birthday is: $birthday\n";
        $output .= "You are currently residing at $address, $city, $province\n";
        $output .= "Your email is \"$email\"\n";

        if ($subscribe) {
            $output .= "Thanks for subscribing to our latest news\n";
        }

        $output .= "Thank you for registering";

        echo nl2br($output);
    } else {
        echo "You cannot proceed to your account because your password does not match";
    }
}
?>