<?php
    unset($_COOKIE['user']);
    setcookie("user", null, -1,'/');
    header("location: " . $_SERVER['HTTP_REFERER']);
?>