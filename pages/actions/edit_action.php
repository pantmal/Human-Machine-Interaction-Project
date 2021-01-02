<?php
require_once "../../settings.php";


$username = $_POST["uname"];
$password = password_hash($_POST["pwd"], PASSWORD_DEFAULT);
$email = $_POST["email"];

$cookie_name = "user";

$query = "";
if ($username != '' && $password == '' && $email == '' ){
    $query = "UPDATE users SET `username` = '$username' WHERE username='$_COOKIE[$cookie_name]' ";
    setcookie($cookie_name, $username, time() + (86400 * 30), "/");
}
if ($username == '' && $password != '' && $email == '' ){
    $query = "UPDATE users SET `password` = '$password' WHERE username='$_COOKIE[$cookie_name]' ";
}
if ($username == '' && $password == '' && $email != '' ){
    $query = "UPDATE users SET `email` = '$email' WHERE username='$_COOKIE[$cookie_name]' ";
}
if ($username != '' && $password != '' && $email == '' ){
    $query = "UPDATE users SET `username` = '$username', `password` = '$password' WHERE username='$_COOKIE[$cookie_name]' ";
    setcookie($cookie_name, $username, time() + (86400 * 30), "/");
}
if ($username == '' && $password != '' && $email != '' ){
    $query = "UPDATE users SET `password` = '$password', `email` = '$email' WHERE username='$_COOKIE[$cookie_name]' ";
}
if ($username != '' && $password == '' && $email != '' ){
    $query = "UPDATE users SET `username` = '$username' , `email` = '$email' WHERE username='$_COOKIE[$cookie_name]' ";
    setcookie($cookie_name, $username, time() + (86400 * 30), "/");
}
if ($username != '' && $password != '' && $email != '' ){
    $query = "UPDATE users SET `username` = '$username', `password` = '$password', `email` = '$email' WHERE username='$_COOKIE[$cookie_name]' ";
    setcookie($cookie_name, $username, time() + (86400 * 30), "/");
}


$result = $conn->query($query);

if (!$result) echo "INSERT failed: $query <br>" . $conn->error . "<br><br>";

header('location:../edit_profile.php?status=success');

mysqli_close($conn);

?>