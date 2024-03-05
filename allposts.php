<?php
include "config.php";

$data = mysqli_query($link, "SELECT * FROM posts");


// Fetch all posts from the database
$query = "SELECT * FROM posts";
$result = mysqli_query($link, $query);
// if(!isset($_SESSION['username'])) {
//     // Redirect to login page
//     header("Location: ./welcome.php");
//     exit;
// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/tutors.css">
    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 360px;
            padding: 20px;
        }
        .search {
            border: 2px solid yellow;
            height: 10vh;
        }
    </style>
    <title>All posts</title>
</head>

<body class="d-flex flex-column justify-content-center align-items-center p-5">
    <?php include "./components/navbar.php" ?>

    <div style="background-color: wheat; " class="container text-center m-5">
        <h1>All posts</h1>
        <div style="overflow-x: hidden; margin-top: 15vh; " class="column ">
            <?php
            if (mysqli_num_rows($result) > 0) {
                // Output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="card col-3 m-3 w-100" style="width: 18rem;">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title"> Subject: ' . $row["subject"] . '</h5>';
                    echo '<h5 class="card-title">Phone no: ' . $row["phone"] . '</h5>';
                    echo '<h5 class="card-text"> City:' . $row["city"] . '</h5>';
                    echo '<h5 class="card-title"> State:' . $row["state"] . '</h5>';
                    echo '<p class="card-title">Message:' . $row["detail"] . '</p>';
                    // You can display other post details as needed
                    echo '<a href="#" class="btn btn-primary">Apply</a>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "No posts found.";
            }
            ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>