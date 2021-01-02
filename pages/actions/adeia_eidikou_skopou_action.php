<?php
require_once "../../settings.php";

$parent_status = '';
$cookie_name = 'user';
if (isset($_COOKIE[$cookie_name])):
    $query = "SELECT * FROM users WHERE username='$_COOKIE[$cookie_name]'";
    $result = $conn->query($query);
    $parent_status = $result->fetch_assoc()['parent'];
else:
    header('location:adeia_eidikou_skopou.php?status=not_user');    
    mysqli_close($conn);
endif;


if($parent_status == 'no') {
    header('location:adeia_eidikou_skopou.php?status=not_parent');    
    mysqli_close($conn);
}
 


$name1 = $_POST["name1"];
$surname = $_POST["surname"];  
$email = $_POST["email"];
$afm = $_POST["afm"];  
$date_from = $_POST["date_from"];
$date_to = $_POST["date_to"];

$paidi_1 = "NULL"; 
$paidi_2 = "NULL";
$paidi_3 = "NULL";
$paidi_4 = "NULL";

if ($_POST["number_of_kids"]=="one"):
    $paidi_1 = $_POST["paidi_1"];
    $paidi_2 = "NULL"; 
    $paidi_3 = "NULL"; 
    $paidi_4 = "NULL";
endif;

if ($_POST["number_of_kids"]=="two"):
    $paidi_1 = $_POST["paidi_1"];
    $paidi_2 = $_POST["paidi_2"]; 
    $paidi_3 = "NULL"; 
    $paidi_4 = "NULL";
endif;

if ($_POST["number_of_kids"]=="three"):
    $paidi_1 = $_POST["paidi_1"];
    $paidi_2 = $_POST["paidi_2"]; 
    $paidi_3 = $_POST["paidi_3"]; 
    $paidi_4 = "NULL";
endif;

if ($_POST["number_of_kids"]=="four_or_more"):
    $paidi_1 = $_POST["paidi_1"];
    $paidi_2 = $_POST["paidi_2"]; 
    $paidi_3 = $_POST["paidi_3"]; 
    $paidi_4 = $_POST["paidi_4"]; 
endif;


if ($_POST["number_of_kids"]=="four_or_more"):
    $number_of_kids = $_POST["kids_4"];
else:
    $number_of_kids = $_POST['number_of_kids'];  
endif;


$query = "INSERT INTO adeia_eidikou_skopou VALUES" . "( DEFAULT, '$name1', '$surname', '$email', '$afm', '$date_from','$date_to','$number_of_kids', '$paidi_1', '$paidi_2','$paidi_3', '$paidi_4')";

$result = $conn->query($query);

if (!$result) echo "INSERT failed: $query <br>" . $conn->error . "<br><br>";

header('location:../adeia_eidikou_skopou.php?status=success');

mysql_close($conn);



?>