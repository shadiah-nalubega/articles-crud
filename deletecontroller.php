<?php

include "db.php";

//get query params

$id = $_GET['id'];

$sql = "DELETE FROM articles where id = $id";
$result = mysqli_query($conn, $sql);

if(!$result){
    die("Query Failed: " . mysqli_error($conn));
}
else{
    header("Location: index.php?delete_msg= Article successfully deleted");
 exit();

}
