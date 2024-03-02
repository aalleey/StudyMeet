<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

// checking the request method 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include "config.php";

// taking the posted data in variabes

$subject = $_POST['subject'];
$class = $_POST['class'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$detail = $_POST['detail'];

// Insert data into the database table
$query = "INSERT INTO posts (subject, class, phone, city, state, zip, detail) VALUES ('$subject', '$class', '$phone', '$city', '$state', '$zip', '$detail')";

if (mysqli_query($link, $query)) {
    echo "Data inserted successfully.";
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
            font: 14px sans-serif;
            text-align: center;
        }
    </style>
</head>


<body class="d-flex flex-column justify-content-center align-items-center p-5">
    <?php include "./components/navbar.php" ?>
    <!-- <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1> -->



    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="needs-validation" novalidate method="post">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom01">Subject Name</label>
                <input type="text" class="form-control" id="validationCustom01" name="subject" placeholder="For Subject?" value="" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom02">Class</label>
                <input type="text" class="form-control" id="validationCustom02" name="class" placeholder="Matric,fsc" value="" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom">Phone Np</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">+92</span>
                    </div>
                    <input type="text" class="form-control" name="phone" id="validationCustomUsername" placeholder="0309277-----" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationCustom03">City</label>
                <input type="text" class="form-control" id="validationCustom03" name="city" placeholder="City" required>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom04">State</label>
                <input type="text" class="form-control" id="validationCustom04" name="state" placeholder="State" required>
                <div class="invalid-feedback">
                    Please provide a valid state.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom05">Zip</label>
                <input type="text" class="form-control" id="validationCustom05" name="zip" placeholder="Zip" required>
                <div class="invalid-feedback">
                    Please provide a valid zip.
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationCustom03">Detail Requirement</label>
                <input style="height: 5rem;" type="textbox" name="detail" class="form-control detail" id="validationCustom03" placeholder="......" required>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
        </div>
        <!-- <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
            </div>
        </div> -->
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>


</html>