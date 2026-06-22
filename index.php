<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Article</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
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

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">

                <div class="card shadow-sm border-0">
                    <div class="card-body p-4 p-md-5">

                        <h2 class="text-center fw-bold mb-4">
                            Create New Article
                        </h2>

                        <form method="POST" action="insert.php">
                            <!-- Title -->
                            <div class="mb-4">
                                <label for="title" class="form-label fw-medium">
                                    Title
                                </label>
                                <input
                                    type="text"
                                    class="form-control form-control-lg"
                                    id="title"
                                    name="title"
                                    placeholder="Enter article title">
                            </div>

                            <!-- Description -->
                            <div class="mb-4">
                                <label for="description" class="form-label fw-medium">
                                    Description
                                </label>
                                <textarea
                                    class="form-control"
                                    id="description"
                                    rows="8"
                                    name="description"
                                    placeholder="Write your article content here..."></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary px-4 py-2">
                                    Publish Article
                                </button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>