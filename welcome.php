<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
session_start();


$session_timeout = 1000;
session_set_cookie_params($session_timeout);

function check_session_timeout()
{
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $GLOBALS['session_timeout'])) {
        // Session expired, destroy session
        session_unset();
        session_destroy();
        // Redirect to a different page or perform any other action
        header("Location: ./login.php");
        exit();
    }
    // Update last activity time
    $_SESSION['last_activity'] = time();
}

// Call the function to check session timeout on each page load
check_session_timeout();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
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
    <h1 class="my-5">Hi, <b>
            <?php echo htmlspecialchars($_SESSION["username"]); ?>
        </b>. Welcome to our site.</h1>

    <p class="d-flex flex-column justify-content-center align-items-center">
        <a href="post-application.php" class="btn btn-primary">Make a post for Teacher</a>
        <a href="search-students.php" class="btn btn-primary my-2">Search for students</a>
    </p>
    <p class="mt-5">
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
</body>


</html>