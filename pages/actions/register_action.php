<?php
require_once "../../settings.php";

$string_split = explode('=',$_SERVER['HTTP_REFERER']);
$head_back = $string_split[1];

$uname = $_POST["uname"];
$password = password_hash($_POST["pwd"], PASSWORD_DEFAULT);
$email = $_POST["email"]; 
$afm = $_POST["afm"]; 
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];  
$radio = $_POST["rdb"];
$parent = '';

if (isset($_POST['parent']) && $_POST['parent'] == 'yes') {
    $parent = 'yes';
}else{
    $parent = 'no';
}    


if ($_POST["afm_ergodoti"]!=''){
    $afm_ergodoti = $_POST["afm_ergodoti"];
    $query = "INSERT INTO users VALUES" . "(DEFAULT, '$uname', '$password', '$email', '$afm', '$afm_ergodoti', '$first_name', '$last_name', '$radio', '$parent', NULL, NULL, NULL, NULL)";
}else{
    $query = "INSERT INTO users VALUES" . "(DEFAULT, '$uname', '$password', '$email', '$afm', NULL, '$first_name', '$last_name', '$radio', '$parent', NULL, NULL, NULL, NULL)";
}



$result = $conn->query($query);

if (!$result) echo "INSERT failed: $query <br>" . $conn->error . "<br><br>";


$cookie_name = "user";
$cookie_value = $uname;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

// Redirect user to welcome page
if (str_contains($head_back, 'index.php')){    
    header("location:../../" . $head_back);
}else{
    header("location:../" . $head_back);
}

mysqli_close($conn);

?>