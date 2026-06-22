<?php
$host='localhost';
$username='root';
$password= '1234';
$dbname= 'internship2026';


$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
};