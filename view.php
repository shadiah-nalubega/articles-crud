<?php
include "db.php";
$sql ='SELECT * FROM articles';

$result = mysqli_query($conn, $sql);

$articles = mysqli_fetch_all($result, MYSQLI_ASSOC); //returns an array of all interns
// var_dump($articles);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view articles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
       <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Articles Manager</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Create Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view.php">View Articles</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php 
    if(isset($_GET['update_msg'])){
    echo "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">";
    echo "<strong>" . $_GET['update_msg'] . "</strong>";
    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
    echo "</div>";
  }

if(isset($_GET['insert_msg'])){
    echo "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">";
    echo "<strong>" . $_GET['insert_msg'] . "</strong>";
    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
    echo "</div>";
  }
if(isset($_GET['delete_msg'])){
    echo "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">";
    echo "<strong>" . $_GET['delete_msg'] . "</strong>";
    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
    echo "</div>";
  }
    ?> 
 
 <div class="container">

 <div class="row">
  <?php if(!empty($_GET)){ ?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?= $_GET['msg'] ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <?php } ?>
    

 </div>

  <table class="table table-striped">

    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Created_on</th>
            <th>Action</th>
        </tr>
        
    </thead>

    <tboday>

    <?php foreach($articles as $article) {?>
        <tr>
            <th scope="row"><?= $article['id'] ?></th>
            <td><?= $article['title'] ?></td>
            <td><?= $article['description'] ?></td>
            <td><?= $article['created_on'] ?></td>
        
            <td>
                <a href="deletecontroller.php?id=<?php echo $article['id'] ?>">Delete</a>
                &nbsp;  &nbsp;  &nbsp;

                <a href="update.php?id=<?= $article['id'] ?>">Edit</a>
            </td>
        </tr>

        <?php } ?>


    </tboday>


  </table>


 </div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 
</body>
</html>