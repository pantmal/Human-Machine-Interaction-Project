<?php
require_once "../../settings.php";

$role = '';
$cookie_name = 'user';
if (isset($_COOKIE[$cookie_name])):
    $query = "SELECT * FROM users WHERE username='$_COOKIE[$cookie_name]'";
    $result = $conn->query($query);
    $role = $result->fetch_assoc()['role'];
else:
    header('location:anastoli_symvasis.php?status=not_user');    
    mysqli_close($conn);
endif;


if($role != 'ergodotis') {
    header('location:anastoli_symvasis.php?status=not_ergodotis');    
    mysqli_close($conn);
}
 

$name = $_POST["name"];
$surname = $_POST["surname"];  
$afm = $_POST["afm"];  
$name_worker = $_POST["name_worker"];
$surname_worker = $_POST["surname_worker"];  
$afm_worker = $_POST["afm_worker"];  

if ($_POST['tilergasia'] == 'yes' && $_POST['anastoli'] != 'yes') {
    $date_from_til = $_POST["date_from_til"];
    $date_to_til = $_POST["date_to_til"];    
    $query = "UPDATE users SET `tilergasia_start` = '$date_from_til', `tilergasia_end` = '$date_to_til'  WHERE afm='$afm_worker' ";
}

if ($_POST['tilergasia'] != 'yes' && $_POST['anastoli'] == 'yes') {
    $date_from_anastoli = $_POST["date_from_anastoli"];
    $date_to_anastoli = $_POST["date_to_anastoli"];    
    $query = "UPDATE users SET `anastoli_start` = '$date_from_anastoli', `anastoli_end` = '$date_to_anastoli'  WHERE afm='$afm_worker' ";
}

if ($_POST['tilergasia'] == 'yes' && $_POST['anastoli'] == 'yes'){
    $date_from_til = $_POST["date_from_til"];
    $date_to_til = $_POST["date_to_til"];    
    $date_from_anastoli = $_POST["date_from_anastoli"];
    $date_to_anastoli = $_POST["date_to_anastoli"];    
    $query = "UPDATE users SET `tilergasia_start` = '$date_from_til', `tilergasia_end` = '$date_to_til', `anastoli_start` = '$date_from_anastoli', `anastoli_end` = '$date_to_anastoli'  WHERE afm='$afm_worker' ";
}


$result = $conn->query($query);

if (!$result) echo "INSERT failed: $query <br>" . $conn->error . "<br><br>";

header('location:../anastoli_symvasis.php?status=success');

mysql_close($conn);



?>