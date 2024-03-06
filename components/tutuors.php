<?php
session_start();

// Check if session variable is set
if (isset($_SESSION['loggedin']) != true) {
    // If session is active, redirect to the particular page
    header("Location: ../login.php");
    exit(); // Ensure script execution stops after redirection
}
include "../config.php";

$data = mysqli_query($link, "SELECT * FROM teacher_data");


// Fetch all posts from the database
$query = "SELECT * FROM teacher_data";
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
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/tutors.css">
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

        .searchh {
            margin-top: 14vh;
            /* margin: 0 auto; */
            width: 100%;
            height: 25vh;

            display: flex;
            justify-content: center;
            align-items: center;


        }

        .ank {
            color: black;
            display: flex;
            justify-content: space-between;
            text-decoration: none;
            font-style: none;
        }

        .ank a {
            text-decoration: none;
            color: black;
        }
    </style>
    <title>All Tutors</title>
</head>

<body class="body">
    <?php include "../components/navbar.php" ?>


    <div class=" searchh container p-5">
        <form action="../components/tutuors.php" class="row g-3">
            <div class="col-auto">
                <label for="staticEmail2" class="visually-hidden">Subject skill</label>
                <input type="text" class="form-control" id="staticEmail2" value="" placeholder="Skill / Subject">
            </div>
            <div class="col-auto">
                <label for="inputPassword2" class="visually-hidden">Password</label>
                <input type="password" class="form-control" id="inputPassword2" placeholder="Location">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Search</button>
                <a href="../registertut.php"><button onclick="regt()" style="margin-left: 20px; width: 10rem; " type="button" class="btn btn-warning mb-3">Register</button></a>
            </div>
            <div class="row g-0">
                <div class="ank g-3">
                    <a active class="active" href="#">All</a>
                    <a href="#">Online</a>
                    <a href="#">Home</a>
                    <a href="#">Assignment</a>
                </div>
            </div>
        </form>
    </div>

    <div style="border: 1px solid black;" class="container">
    <div cla></div>
    <div class="fnam">Ali</div>
    <div class="lnam">Siddiqui</div>


    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script>
        function regt() {
            window.location('../welcome.php');

        }
        // Show loader when page starts loading
        document.addEventListener('DOMContentLoaded', function() {
            // Show loader
            document.querySelector('.loader-container').style.display = 'flex';
            setTimeout(function() {
                document.querySelector('.loader-container').style.display = 'flex';
            }, 5000);
            // Hide loader after 5 seconds
            setTimeout(function() {
                document.querySelector('.').style.display = 'none';
            }, 5000); // 5000 milliseconds = 5 seconds
        });
    </script>
</body>

</html>