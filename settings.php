<?php
    $hn = 'localhost';
    $db = 'sdi1600191';
    $un = 'root';
    $pw = '';

    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);

?>