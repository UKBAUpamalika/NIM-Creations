<?php
require 'Admin Panel/DB_Connection.php'; // Add the Database connection into the page
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <?php
   /* session_start();
    if (isset($_SESSION['Userid']) && isset($_SESSION['Email'])) {
        echo "Hello " . $_SESSION['Username'];
        echo '<br>
    <a href="logout.php">Log Out</a>
    ';
    }
    ?>
    </div>
</body>

</html>