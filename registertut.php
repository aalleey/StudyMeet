<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

// checking the request method 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "config.php";

    // taking the posted data in variabes

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $desc = $_POST['desc'];
    $exp = $_POST['exp'];
    $expo = $_POST['expo'];
    $pt = $_POST['pt'];

    // Insert data into the database table
    $query = "INSERT INTO teacher_data (`fname`, `lname`, `age`, `des`, `exp`, `expo`, `sch`) VALUES ('$fname', '$lname', '$age', '$desc', '$exp', '$expo', '$pt')";

    if (mysqli_query($link, $query)) {
        echo "Data inserted successfully.";
        $succ = 'Submit Succesfully';
        error_reporting(E_ALL ^ E_WARNING); 
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Post application page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="./css/navbar.css">
    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            /* font: 14px sans-serif; */
            /* text-align: center; */
            /* background-color: white !important; */

        }

        .cont {
            border-radius: 10px;
            border: 1px solid black;
            background-color: #fdffcd;
            position: relative;
            width: 80%;
            margin: 0 auto;
            /* margin-top: 10vh; */
            top: 13vh;
            height: 80vh;
            padding: 10px;
        }

        .up {
            height: 10vh;


        }

        .up h4 {
            color: black;
            justify-content: center;
            text-align: center;
        }

        .exp {
            width: 90%;
        }

        .last {
            width: 100%;
            margin: 0 auto;
            justify-content: center;
            align-items: center;
            justify-content: center;
            display: flex;
            position: relative;
            top: 5vh;

        }

        .last button {
            width: 200px;
        }
    </style>
</head>


<body>
    <?php include "./components/navbar.php" ?>
    <!-- <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1> -->

    <div class="cont p-3">
        <div class="up">
            <h4>Please Fill Form Carefully </h4>
           
        </div>
        <form action="" method="post">
            <div class="row">
                <div class="col">
                    <label for="inputPassword5" class="form-label">First Name</label>
                    <input name="fname" type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                    <!-- <div id="passwordHelpBlock" class="form-text">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji. -->
                </div>
                <div class="col">
                    <label for="inputPassword5" class="form-label">Last name</label>
                    <input name="lname" type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                    <!-- <div id="passwordHelpBlock" class="form-text">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji. -->
                </div>
                <div class="col">
                    <label for="inputPassword5" class="form-label">Age</label>
                    <input name="age" type="number" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                    <!-- <div id="passwordHelpBlock" class="form-text">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji. -->
                </div>
            </div>

            <label for="inputPassword5" class="form-label">Breaf Discription</label>
            <textarea name="desc" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"></textarea>
            <div id="passwordHelpBlock" class="form-text">
                Here Please give a brief discrption of yourself your teaching experience and personlity everything
            </div>
            <div style="margin-top: 3%;" class="row ">
                <div class="col">
                    <label for="inputPassword5" class="form-label">Year of Experience</label>
                    <input name="exp" type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                    <!-- <div id="passwordHelpBlock" class="form-text">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji. -->
                </div>
                <div class="row">
                    <div class="col">
                        <label for="inputPassword5" class="form-label">Year of Experience(Online + Offline)</label>
                        <input type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                        <!-- <div id="passwordHelpBlock" class="form-text">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji. -->
                    </div>

                </div>


                <div class="col">
                    <label for="inputPassword5" class="form-label">PartTime/FullTime</label>
                    <input name="pt" type="Text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                    <!-- <div id="passwordHelpBlock" class="form-text">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji. -->
                </div>


            </div>
            <div class="last">
                <button class="btn btn-warning" type="submit">Submit <?php  ?></button>
            </div>
    </div>

    </div>






    </form>
    </div>



    <script>

    </script>
</body>


</html>