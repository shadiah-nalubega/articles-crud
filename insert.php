<?php

include 'db.php';
$data =$_POST;

$title =$_POST['title'];
$description=$_POST['description'];

$sql = "INSERT INTO articles (title, description)
        VALUES ('$title', '$description')";
$result = mysqli_query($conn,$sql);


if ($result) {
        header("Location: index.php?insert_msg=Article successfully inserted");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }