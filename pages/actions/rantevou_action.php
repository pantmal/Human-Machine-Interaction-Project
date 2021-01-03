<?php
require_once "../../settings.php";


$name1 = $_POST["name1"];
$surname = $_POST["surname"];  
$email = $_POST["email"];
$afm = $_POST["afm"];  
$date = $_POST["date_from"];
$time = $_POST["time"];  
$radio = $_POST["rdb"];


$query = "INSERT INTO reservation VALUES" . "(DEFAULT, '$name1', '$surname', '$email', '$afm', '$date', '$time', '$radio' )";

$result = $conn->query($query);

if (!$result) echo "INSERT failed: $query <br>" . $conn->error . "<br><br>";

header('location:../kleisimo_rantevou.php?status=success');

mysqli_close($conn);

?>