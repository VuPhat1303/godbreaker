<?php
    $mysqli = new mysqli("localhost","root","","godbreaker");
    // Check connection
    if ($mysqli->connect_errno) {
        echo "Kết nối MYSQLi Lỗi". $mysqli->connect_errno;
    exit();
    }
?>