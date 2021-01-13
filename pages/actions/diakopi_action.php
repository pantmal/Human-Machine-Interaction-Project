<?php
require_once "../../settings.php";

$role = '';
$cookie_name = 'user';
if (isset($_COOKIE[$cookie_name])):
    $query = "SELECT * FROM users WHERE username='$_COOKIE[$cookie_name]'";
    $result = $conn->query($query);
    $parent = $result->fetch_assoc()['parent'];
else:
    header('location:lista_adeiwn.php?status=not_user');    
    mysqli_close($conn);
endif;


if($parent != 'yes') {
    header('location:lista_adeiwn.php?status=not_parent');    
    mysqli_close($conn);
}

$id = $_GET['id'];

$query = "DELETE FROM adeia_eidikou_skopou WHERE id='$id' ";

$result = $conn->query($query);

if (!$result) echo "INSERT failed: $query <br>" . $conn->error . "<br><br>";

header('location:../lista_adeiwn.php?status=success');

mysql_close($conn);



?>