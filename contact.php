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
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>


<body class="d-flex flex-column justify-content-center align-items-center p-5">
    <?php include "./components/navbar.php" ?>
    <h1>Message Us</h1>
    <form action="" class="mb-5">
        <input class="form-control" type="text" placeholder="Enter Your Message">
        <input class="btn btn-primary mt-2" type="submit" value="Send">
    </form>
    <h3 class="mt-5">
        Or you can contact us on following platforms:
            <h5>Email : WajdanAkmal@mail.com, Ali@mail.com</h5>
            <h5>Phone No : 123456 123456</h5>
            <h5>Linked In : bitsbytesworkers</h5>
            <h5>Hire us on : Fiver : "bitsbytesworkers"</h5>
    </h3>
</body>
</html>