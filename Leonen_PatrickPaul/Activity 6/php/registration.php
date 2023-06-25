<?php

register ($_POST['password'],$_POST['confirmPassword']);

function register($password,$confirmPassword) {
    $firstName =  ucwords($_POST['firstName']);
    $lastName =  ucwords($_POST['lastName']);
    $birthday =  $_POST['birthday'];
    $address =  ucwords($_POST['address']);
    $city =  ucwords($_POST['city']);
    $province =  $_POST['province'];
    $zipCode =  $_POST['zipCode'];
    $email =  strtolower($_POST['email']);
    $passwordInput =  $_POST['password'];
    $confirmPasswordInput =  $_POST['confirmPassword'];

    if ($passwordInput!==$confirmPasswordInput) {
        echo "You cannot proceed to your account because your password does not match \n";
        } else if(isset($_POST['checkbox']) && $password===$confirmPassword) { 
            echo "Hi $firstName $lastName <br>"; 
            echo"Welcome to My System <br>"; 
            echo"Your Birthdate is $birthday <br>"; 
            echo"You are currently residing at $address $city $province \n"; 
            echo"Your email is $email <br> <br>"; 
            echo"Thank you for registering <br>";
            } else if ($password===$confirmPassword){
                echo "Hi $firstName $lastName <br>";
                echo" Welcome to My System <br>"; 
                echo"Your Birthdate is $birthday <br>"; 
                echo"You are currently residing at $address $city $province <br>"; 
                echo"Your email is $email <br>"; 
            }      


  
}



?>