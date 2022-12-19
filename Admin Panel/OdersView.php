<?php
session_start();
require 'DB_Connection.php'; // Add the Database connection into the page
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Adding - Pantries</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="fontawesome\css\all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/Prodcutadd.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="Javascript/productadd.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="CSS/Oder.css">


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php 
if(isset($_SESSION['Email'])){


?>
    <div class="container">

        <div class="row">
            <div class="col-12">



                <i class="fas fa-search"></i>
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Oders.." title="Type in a name">
                <br><br><br>
                <div class="table-wrapper-scroll-y my-custom-scrollbar">

                    <table id="myTable" class="TABLE">

                        <thead>
                            <tr class="thd TR">
                                <th class="TH" data-type="text-short"><span class="resize-handle"></span></th>
                                <th class="TH" data-type="numeric">Order Id <span class="resize-handle"></span></th>
                                <th class="TH" data-type="numeric">Order Status <span class="resize-handle"></span></th>
                                <th class="TH" data-type="text-short">Customer Name <span class="resize-handle"></span></th>
                                <th class="TH" data-type="text-short">Phone <span class="resize-handle"></span></th>
                                <th class="TH" data-type="text-short">Product_Type<span class="resize-handle"></span></th>
                                <th class="TH" data-type="text-short">Model_No<span class="resize-handle"></span></th>
                                <th class="TH" data-type="numeric">Date and Time <span class="resize-handle"></span></th>
                                <th class="TH" data-type="text-short">Email <span class="resize-handle"></span></th>


                            </tr>
                        </thead>
                        <?php

                        $view = "           SELECT *
                                            FROM useraccount , orders 
                                            WHERE useraccount.userid =orders.Userid
                                            ORDER BY Date_time  DESC
                                            ";

                        $query_run2 = mysqli_query($connection, $view);
                        while ($row = mysqli_fetch_array($query_run2)) { ?>

                            <tr class="TR">
                                <form action="" method="get">

                                    <?php $id = $row['Orderid']; ?>
                                    <?php echo "<input type='hidden' name='n' value= '$id' >"; ?>
                                    <td class="TD"><button name="delete" class="delete"><i class="fas fa-trash"></i></button></td>
                                    <td class="TD"><?php echo  $row['Orderid']; ?></td>
                                    <td lass="TD">
                                        <?php
                                        $status =  $row['Order_Status'];
                                        if ($status == 1) {
                                            echo '<center><div style="color:blue; margin:15px; ">Ordered</div></center>';
                                        } else {
                                            echo '<center> <div style="color:red; margin:15px; ">Cancelled</div> </center>';
                                        }






                                        ?>
                                    </td>
                                    <td class="TD" style="padding: 20px;"><?php echo  $row['Name']; ?></td>
                                    <td class="TD" style="padding: 20px;"><?php echo  $row['Phone']; ?></td>
                                    <td class="TD"><?php echo  $row['Product_type']; ?></td>
                                    <td class="TD"><?php echo  $row['Model_number']; ?></td>

                                    <td class="TD"><?php echo  $row['Date_time']; ?></td>
                                    <td class="TD" style="padding: 20px;"><?php echo  $row['Email']; ?></td>


                                </form>
                            </tr>
                        <?php } ?>

                        <?php



                        ?>

                        </tbody>
                    </table>
                </div>
                <script>
                    function myFunction() {
                        var input, filter, table, tr, td, i, txtValue;
                        input = document.getElementById("myInput");
                        filter = input.value.toUpperCase();
                        table = document.getElementById("myTable");
                        tr = table.getElementsByTagName("tr");
                        for (i = 0; i < tr.length; i++) {
                            td = tr[i].getElementsByTagName("td")[2];
                            td1 = tr[i].getElementsByTagName("td")[3];
                            td2 = tr[i].getElementsByTagName("td")[4];
                            td3 = tr[i].getElementsByTagName("td")[5];
                            td4 = tr[i].getElementsByTagName("td")[6];
                            if (td || td1 || td2 || td3 || td4) {
                                txtValue = td.textContent || td.innerText;
                                txtValue1 = td1.textContent || td1.innerText;
                                txtValue2 = td2.textContent || td2.innerText;
                                txtValue3 = td3.textContent || td3.innerText;
                                txtValue4 = td4.textContent || td4.innerText;
                                if (txtValue.toUpperCase().indexOf(filter) > -1 ||
                                    txtValue1.toUpperCase().indexOf(filter) > -1 ||
                                    txtValue2.toUpperCase().indexOf(filter) > -1 ||
                                    txtValue3.toUpperCase().indexOf(filter) > -1 ||
                                    txtValue4.toUpperCase().indexOf(filter) > -1
                                ) {
                                    tr[i].style.display = "";
                                } else {
                                    tr[i].style.display = "none";
                                }
                            }
                        }
                    }
                </script>
                <script src="Javascript/resizabletable.js"></script>

            </div>

        </div>

        <br>
        <br><br>
        <br>
</body>

</html>



<?php


if (isset($_GET['delete'])) {

    $_SESSION['Delete_product_id'] = $_GET['n'];
    echo $_SESSION['Delete_product_id'];
    //$id = $_GET['n'];
    echo "<script>

    Swal.fire({
        title: 'Are you sure?',
        text: 'You wont be able to revert this!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
            
          Swal.fire(
            window.location = 'delete.php'
            
          )
        }
      })
      </script>
      ";
    // $id = $_GET['n'];

    //delete($id);
}



function delete($id)
{
    echo 'Hello';
    $con = new mysqli("localhost", "root", "", "nimcreations");
    $delete = "DELETE FROM orders WHERE id = $id ";
    $rundelete = mysqli_query($con, $delete);
    if ($rundelete) {
        echo "<script type='text/javascript'>alert('Data Deleted Succesfully!!');location='Admin_Productadd_pantry.php';</script>";
    } else {
        echo "Data Not Deleted ";
    }
}

?>
<?php
/*
if (isset($_POST["upload__img-close"])) {
    
    foreach ($_FILES['image']['tmp_name'] as $key => $value) {
        unlink($_POST['$_FILES["image"]["name"][']);
    }

    //echo '<script>alert(1)</script>';
    //echo 'Deleted';
}
*/


/*
$view = "SELECT * FROM sofa";

$run_view = mysqli_query($connection, $view);
$y = 0;
while ($mrow = mysqli_fetch_array($run_view)) {
    echo '<img src="data:image;base64,' . base64_encode($mrow['Photo1']) . '" alt="" srcset="" width=100 height=50>';
    echo '<img src="data:image;base64,' . base64_encode($mrow['Photo2']) . '" alt="" srcset="" width=100 height=50>';
    echo '<img src="data:image;base64,' . base64_encode($mrow['Photo3']) . '" alt="" srcset="" width=100 height=50>';
    echo '<img src="data:image;base64,' . base64_encode($mrow['Photo4']) . '" alt="" srcset="" width=100 height=50>';
    echo '<img src="data:image;base64,' . base64_encode($mrow['Photo5']) . '" alt="" srcset="" width=100 height=50>';
    echo '<br>';
}*/

?>


<!--  
                                            <td><img src="img/<?php // echo $row["Photo"]; 
                                                                ?>" width=100 height=50 title="<?php //echo $row['image']; 
                                                                                                ?>"></td>
            <<td><?php // echo '<img src="data:image;base64, ' . base64_encode($row['Photo']) . '" alt="" srcset="" style = "width:100px; height:50px">'; 
                    ?></td>-->


<?php }
else{

    echo "

    <script>
    Swal.fire({
    
        icon: 'error',
        title: 'Oops...',
        text: 'Please Login First',
        timer: 3000
    }).then(function() {
        window.location = 'Adminlogin.php';
    });
    
    
    </script>
    
";
                                            
}



?>