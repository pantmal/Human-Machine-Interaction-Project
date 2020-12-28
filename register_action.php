<?php
require_once "settings.php";

$uname = $_POST["uname"];
$password = password_hash($_POST["pwd"], PASSWORD_DEFAULT);
$email = $_POST["email"]; 
$afm = $_POST["afm"]; 
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];  
$radio = $_POST["rdb"];


$query = "INSERT INTO users VALUES" . "(DEFAULT, '$uname', '$password', '$email', '$afm', '$first_name', '$last_name', '$radio')";

$result = $conn->query($query);

if (!$result) echo "INSERT failed: $query <br>" . $conn->error . "<br><br>";


$cookie_name = "user";
$cookie_value = $uname;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

// Redirect user to welcome page
header("location: index.php");

mysqli_close($conn);

?>