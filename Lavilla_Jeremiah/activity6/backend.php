<?php
$password2 = $_POST['password2'];
$password3 = $_POST['password3'];



submit($password2, $password3);
function submit($password2, $password3) {

if ($password2 == $password3) {

echo "Hi ";
echo ucfirst ($_POST['firstname']);
echo "\n";
echo ucfirst ($_POST['lastname']);
echo "</br>";
echo "Welcome to My System";
echo "</br>";
echo "Your birthday is ";
echo $_POST['birthday'];
echo "</br>";
echo "You are currently residing at ";
echo ucwords ($_POST['address']);
echo "\n";
echo ucwords ($_POST['city']);
echo "\n";
echo ucwords ($_POST['value']);
echo "\n";
echo $_POST['zip'];
echo "</br>";
echo "Your email is ";
echo $_POST['email1'];
echo "</br>";

echo "</br>";
echo "</br>";
echo "Thank you for registering";

}

else  {
    echo "You cannot proceed to your account because your password does not match";

}
}




?>