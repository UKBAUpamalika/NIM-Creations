<?php
require 'DB_Connection.php'; // Add the Database connection into the page
session_start();
$id = $_SESSION['Delete_product_id'];
delete($id);
function delete($id)
{
    echo 'Hello';
    $con = new mysqli("localhost", "root", "", "nimcreations");
    $delete = "DELETE FROM orders WHERE Orderid = $id ";
    $rundelete = mysqli_query($con, $delete);
    if ($rundelete) {
        echo "<script type='text/javascript'>alert('Data Deleted Succesfully!!');location='OdersView.php';</script>";
    } else {
        echo "Data Not Deleted ";
    }
}


session_unset();




?>