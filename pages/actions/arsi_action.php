<?php
require_once "../../settings.php";


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