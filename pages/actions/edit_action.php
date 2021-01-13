<?php
require_once "../../settings.php";


$username = $_POST["uname"];
$pwd = $_POST["pwd"];
if ($pwd != ''){
    $password = password_hash($pwd, PASSWORD_DEFAULT);
}
$email = $_POST["email"];

$cookie_name = "user";

$query = "";
if ($username != '' && $password == '' && $email != '' ){
    $query = "UPDATE users SET `username` = '$username' , `email` = '$email' WHERE username='$_COOKIE[$cookie_name]' ";
    setcookie($cookie_name, $username, time() + (86400 * 30), "/");
}
else{
    $query = "UPDATE users SET `username` = '$username', `password` = '$password', `email` = '$email' WHERE username='$_COOKIE[$cookie_name]' ";
    setcookie($cookie_name, $username, time() + (86400 * 30), "/");
}


$result = $conn->query($query);

if (!$result) echo "INSERT failed: $query <br>" . $conn->error . "<br><br>";

header('location:../edit_profile.php?status=success');

mysqli_close($conn);

?>