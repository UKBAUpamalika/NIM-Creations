
 <!-- ///////////////////////////////////  Database Coonection /////////////////////////////////////// -->



 <?php

$server_name = "localhost";
$user_name = "root";
$password = "";
$database = "nimcreations";

$connection = new mysqli($server_name, $user_name, $password, $database);

if ($connection->connect_error) {
    die("Connection Error");
} else {

    //echo "<script>alert('Connection Okay Lets Go to the Admin Panel')</script>";
}
?>
<!-- ///////////////////////////////////  Database Coonection /////////////////////////////////////// -->
