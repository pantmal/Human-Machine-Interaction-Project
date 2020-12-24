<?php
    $hn = 'localhost';
    $db = 'sdi1600268';
    $un = 'root';
    $pw = '';

    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);

?>