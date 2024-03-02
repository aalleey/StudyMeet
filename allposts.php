<?php
    include "config.php";
 
    $data = mysqli_query($link, "SELECT * FROM posts");


// Fetch all posts from the database
$query = "SELECT * FROM posts";
$result = mysqli_query($link, $query);
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <!-- ===== CSS ===== -->
            <link rel="stylesheet" href="./css/navbar.css">
    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
    <title>All posts</title>
</head>
<body class="d-flex flex-column justify-content-center align-items-center">
<?php include "./components/navbar.php" ?>
    <h1>All posts</h1>
<?php
    if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="container d-flex flex-direction-row justify-content-center align-items-center">';
        echo '<div class="card" style="width: 18rem;">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $row["subject"] . '</h5>';
        echo '<h5 class="card-title">' . $row["state"] . '</h5>';
        echo '<h5 class="card-title">' . $row["phone"] . '</h5>';
        echo '<h5 class="card-title">' . $row["detail"] . '</h5>';
        echo '<h5 class="card-title">' . $row["state"] . '</h5>';
        echo '<p class="card-text">' . $row["city"] . '</p>';
        // You can display other post details as needed
        echo '<a href="#" class="btn btn-primary">Apply</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No posts found.";
}

?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>