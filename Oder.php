<?php
require 'Admin Panel/DB_Connection.php'; // Add the Database connection into the page
session_start();
//echo "Oder Page"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php


    if (isset($_SESSION['Email']) && $_SESSION['Productid_for_Oder']) {
        //echo "Hi <br>";
        //echo $_SESSION['Productid_for_Oder'];
        $Productid_for_Oder = $_SESSION['Productid_for_Oder'];
        $tablename = $_SESSION['Tablename_for_Oder'];
        $oderfetch = "SELECT * FROM $tablename WHERE id = $Productid_for_Oder";
        $run_oderfetch = mysqli_query($connection, $oderfetch);
        if ($run_oderfetch) {
            while ($row = mysqli_fetch_array($run_oderfetch)) {
                $product_Type = $row['Product_Type'];
                $Modelnumber = $row['Model_No'];
                $productid = $row['id'];
                $photo = $row['Photo1'];
                $price = $row['Price'];
            }
        }
        $usermail = $_SESSION['Email'];

        $userfetch = "SELECT *  FROM useraccount WHERE Email='$usermail'";
        $run_userfetch = mysqli_query($connection, $userfetch);
        if ($run_userfetch) {
            while ($row_user = mysqli_fetch_array($run_userfetch)) {
                $userid = $row_user['userid'];
                //echo $userid;
            }
        } else {
            echo "error";
        }

        $odertable = "INSERT INTO orders(Userid, Product_type , Product_table_name, Productid, Model_number,Color,Price,Order_Status) VALUES('$userid','$product_Type','$tablename','$productid','$Modelnumber', 'RED','$price', true)";
        $oder_history_table = "INSERT INTO order_history(Orderid, Userid, Product_type , Product_table_name, Productid, Model_number,Color,Price,Order_Status)
                            SELECT Orderid, Userid, Product_type , Product_table_name, Productid, Model_number,Color,Price,Order_Status
                                    FROM orders ORDER BY Orderid DESC  LIMIT 1";
        $run_odertable = mysqli_query($connection, $odertable);
        $run_oder_history_table = mysqli_query($connection, $oder_history_table);
       
        if ($run_odertable) {
//rathnayaka+perera
            $to = 'chathu9935@gmail.com';
            $sender = 'chathu9935@gmail.com';
            $mail_subject = 'A CUSTOMER ODER SOME ITEM';
            $email_body = '<b> Dear Admin' . '</b>';
            $email_body .= '<p> You Have a new oder. </p>';
            $email_body .= '<p> Thank you! <br><b>NIM Creations</b></p>';

            $header = "FROM: {$sender}\r\nContent-Type: text/html;";

            $send_mail_result = mail($to, $mail_subject, $email_body, $header);

            if ($send_mail_result) {
                echo "
                
            <script> Swal.fire(
                'Check Your Email to Verify !!',
                '',
                'success'
              )</script>
            ";
                echo "
    <script>
    Swal.fire({
      
        icon: 'success',
        title: 'Your Order has been Recorded. Our Admins will call you back',
        showConfirmButton: false,
        timer: 3000
      }).then(function() {
        window.location = 'Furniture.php';
    });
    
      
    </script>
    ";
            }
        } else {
            echo "
    <script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong!',
        
      })
    </script>
    ";
        }
    } else {
        echo "
    <script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Please Register Before oder the item',
        
      }).then(function() {
        window.location = 'signup.php';
    });
      
    </script>
    ";
    }

    ?>

</body>

</html>


<!-- 

insert data from one table to another

INSERT INTO order_history(Orderid, Userid, Product_type , Product_table_name, Productid, Model_number,Color,Price,Order_Status)
SELECT Orderid, Userid, Product_type , Product_table_name, Productid, Model_number,Color,Price,Order_Status
FROM orders  LIMIT 1



INSERT INTO order_history(Orderid, Userid, Product_type , Product_table_name, Productid, Model_number,Color,Price,Order_Status)
SELECT Orderid, Userid, Product_type , Product_table_name, Productid, Model_number,Color,Price,Order_Status
FROM orders ORDER BY Orderid DESC  LIMIT 1
-->