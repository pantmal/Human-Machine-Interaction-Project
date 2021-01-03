<?php
require_once "../../settings.php";

$role = '';
$cookie_name = 'user';
if (isset($_COOKIE[$cookie_name])):
    $query = "SELECT * FROM users WHERE username='$_COOKIE[$cookie_name]'";
    $result = $conn->query($query);
    $role = $result->fetch_assoc()['role'];
else:
    header('location:lista_ergazomenwn.php?status=not_user');    
    mysqli_close($conn);
endif;


if($role != 'ergodotis') {
    header('location:lista_ergazomenwn.php?status=not_ergodotis');    
    mysqli_close($conn);
}


$afm = $_GET['afm'];
$option = $_GET['option'];

if ($option == 'til'){
    $start = 'tilergasia_start';
    $end = 'tilergasia_end';
}else{
    $start = 'anastoli_start';
    $end = 'anastoli_end';
}

$query = "UPDATE users SET `$start` = NULL, `$end` = NULL  WHERE afm='$afm' ";

$result = $conn->query($query);

if (!$result) echo "INSERT failed: $query <br>" . $conn->error . "<br><br>";

header('location:../lista_ergazomenwn.php?status=success');

mysql_close($conn);



?>