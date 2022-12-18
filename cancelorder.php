<?php
require 'Admin Panel/DB_Connection.php'; // Add the Database connection into the page

session_start();
?>


<!DOCTYPE html>
<html lang="en">

<body>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="Javascript/resizabletable.js"></script>

    <?php
    echo $_SESSION['Orderid_for_cancel'];
    if (isset($_SESSION['Orderid_for_cancel'])) {


        $orderid = $_SESSION['Orderid_for_cancel'];
        //$cancel = "UPDATE orders SET  Order_Status = false WHERE 	Orderid = '$orderid'";
        $cancel =  "UPDATE orders
                    SET Order_Status = 0
                    WHERE Orderid = '$orderid'";
        $runcancel = mysqli_query($connection, $cancel);
        $cancel_History = "UPDATE order_history SET Order_Status = 0 WHERE Orderid = '$orderid'";
        $runcancel_History = mysqli_query($connection, $cancel_History);
        if ($runcancel && $runcancel_History) {
            header("location: ./Order_History.php");
        }
    }
    ?>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
<?php

?>
<!--


 /*
            echo "
                <script>
        
                    Swal.fire({
                            icon: 'success',
                            title: 'Your Cancel request has been sent. Our admins will contact you soon',
                            showConfirmButton: false,
                            timer: 1500
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
                            text: 'Please Try again Later!',
                            
                        })
                        </script>
                        
                        ";
                            }
                        */




        -->