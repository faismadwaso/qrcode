<?php

    $conn = mysqli_connect("localhost","root","","loginadminuser");

    if (!$conn) {
        die("failed to connec to database " . mysqli_error($conn));
    }
// set character set utf-8
mysqli_query($conn, 'SET CHARACTER SET UTF8');
?>