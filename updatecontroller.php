<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

require_once 'db.php';   // include  include_once  require require_once

$id = $_GET['id'];

// var_dump($id);return;

//getting submmited data from the form
$title= $_POST['title'];
// var_dump($title); return;
$description = $_POST['description'];



//update the information
$sql = "UPDATE articles
              SET title='$title',
                  description='$description'
              WHERE id='$id'";

$result = mysqli_query($conn, $sql);
// var_dump($result); return;
if(!$result){
        die("Query Failed: " . mysqli_error($conn));
    } else {
     header("Location: view.php?update_msg=Article successfully updated");
    exit();

    }

    