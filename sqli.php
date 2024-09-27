<?php
$hostname = "localhost";
$username = "root";
$password = "root";
$dbname = "a_phptute";
$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn)
    die("connection failed"); {
    echo "connection succced";
}
