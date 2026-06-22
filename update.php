<?php
require_once 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM articles where id =$id";
$res = mysqli_query($conn, $sql);

$row= mysqli_fetch_assoc($res);  //returns a single reocord
// var_dump($data);
if (!$row) {
    die("Report not found");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update Article</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">

                <div class="card shadow-sm border-0">
                    <div class="card-body p-4 p-md-5">

                        <h2 class="text-center fw-bold mb-4">
                            Update Article
                        </h2>

                        <form method="POST" action="updatecontroller.php">
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
                                    placeholder="Enter article title"
                                    value="<?=$row['title']?>"
                                    >
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
                                    placeholder="Write your article content here..."
                                    >
                                    <?= htmlspecialchars($row['description']) ?>
                                </textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary px-4 py-2">
                                    update Article
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
