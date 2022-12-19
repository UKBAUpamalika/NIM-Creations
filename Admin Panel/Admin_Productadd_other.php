<?php
require 'DB_Connection.php'; // Add the Database connection into the page
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Adding - Sofa</title>

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
    <link rel="stylesheet" href="CSS/searchtable.css">



</head>

<body>



<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php 
if(isset($_SESSION['Email'])){


?>

    <div class="container">



        <!-- Upload  -->

        <div style="color:#fda10d ; font-weight: 700; font-size:20px; margin-top: 50px; "> Add products - SOFA </div><br>

        <div class="col-10">
            <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

            <form action="Admin_Productadd_sofa.php" method="POST" enctype="multipart/form-data">


                <div class="file-upload">
                    <table>
                        <tr>
                            <td> <label for="1">Type</label></td>
                            <td> <input type="text" name="types" id="" value="NIM CREATIONS" style="width:400px; margin:10px" /><br></td>
                        </tr>
                        <tr>
                            <td> <label for="1">Product Name </label></td>
                            <td> : <input type="text" name="Product_name" id="" placeholder="Enter the product/model name" style="width:400px; margin:10px" required /><br></td>
                        </tr>
                        <tr>
                            <td> <label for="1">Price </label></td>
                            <td> : <input type="text" name="Price" id="" placeholder="Enter the Price" style="width:400px; margin:10px" required /><br></td>
                        </tr>

                        <tr>
                            <td> <label for="1">Description </label></td>
                            <td style="padding:20px"> <textarea name="Description" cols="50" rows="5"></textarea><br></td>

                        </tr>

                        <tr>
                            <td> <label for="1">Color : </label></td>
                            <td style="padding:20px">
                                Red : <input type="checkbox" name="color[]" id="" value="red">
                                Blue : <input type="checkbox" name="color[]" id="" value="blue">
                                Yellow : <input type="checkbox" name="color[]" id="" value="yellow">
                                Green : <input type="checkbox" name="color[]" id="" value="green">




                                <br>
                            </td>

                        </tr>

                        <tr>
                            <td>Image</td>

                            <td>

                                <div class="upload__box">

                                    <div class="upload__btn-box">
                                        <label class="upload__btn">

                                            <p>Insert</p>
                                            <input type="file" multiple="" data-max_length="20" class="upload__inputfile" name="image[]">



                                        </label>
                                    </div>
                                    <div class="upload__img-wrap"></div>
                            </td>

                        </tr>
                    </table>


                    <button type="submit" class="upload" name="Uploadsofa">Upload</button>


                </div>


            </form>

            <br>
        </div>





        <div class="row">
            <div class="col-12">




                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
                <br><br><br>
                <div class="table-wrapper-scroll-y my-custom-scrollbar">

                    <table id="myTable" class="TABLE">

                        <thead>
                            <tr class="thd TR">
                                <th class="TH" data-type="text-short"><span class="resize-handle"></span></th>
                                <th class="TH" data-type="numeric">Database id <span class="resize-handle"></span></th>
                                <th class="TH" data-type="text-short">Product_Type<span class="resize-handle"></span></th>
                                <th class="TH" data-type="text-short">Model_No<span class="resize-handle"></span></th>
                                <th class="TH" data-type="numeric">Price <span class="resize-handle"></span></th>
                                <th class="TH" data-type="text-long">Description <span class="resize-handle"></span></th>
                                <th class="TH" data-type="text-short">Metirial <span class="resize-handle"></span></th>
                                <th class="TH" data-type="text-long">Photo 1 <span class="resize-handle"></span></th>
                                <th class="TH" data-type="text-long">Photo 2 <span class="resize-handle"></span></th>
                                <th class="TH" data-type="text-long">Photo 3 <span class="resize-handle"></span></th>
                                <th class="TH" data-type="text-long">Photo 4 <span class="resize-handle"></span></th>
                                <th class="TH" data-type="text-long">Photo 5 <span class="resize-handle"></span></th>


                            </tr>
                        </thead>
                        <?php

                        $view = "SELECT * FROM sofa";
                        $query_run2 = mysqli_query($connection, $view);
                        while ($row = mysqli_fetch_array($query_run2)) { ?>

                            <tr class="TR">
                                <form action="" method="get">

                                    <?php $id = $row['id']; ?>
                                    <?php echo "<input type='hidden' name='n' value= '$id' >"; ?>
                                    <td class="TD"><button name="delete" class="delete"><i class="fas fa-trash"></i></button></td>
                                    <td class="TD"><?php echo  $row['id']; ?></td>
                                    <td class="TD"><?php echo  $row['Product_Type']; ?></td>
                                    <td class="TD"><?php echo  $row['Model_No']; ?></td>
                                    <td class="TD"><?php echo  $row['Price']; ?></td>
                                    <td class="TD" style="height: 100px; overflow-y: scroll;">
                                        <?php echo  $row['Desc']; ?>
                                    </td>
                                    <td class="TD" style="padding: 20px;"><?php echo  $row['Metirial']; ?></td>

                                    <td class="TD">
                                        <?php echo '<img src="data:image;base64,' . base64_encode($row['Photo1']) . '" alt="" srcset="" width=100 height=50>'; ?> </td>
                                    <td class="TD">
                                        <?php echo '<img src="data:image;base64,' . base64_encode($row['Photo2']) . '" alt="" srcset="" width=100 height=50>'; ?> </td>
                                    <td class="TD">
                                        <?php echo '<img src="data:image;base64,' . base64_encode($row['Photo3']) . '" alt="" srcset="" width=100 height=50>'; ?> </td>
                                    <td class="TD">
                                        <?php echo '<img src="data:image;base64,' . base64_encode($row['Photo4']) . '" alt="" srcset="" width=100 height=50>'; ?> </td>
                                    <td class="TD">
                                        <?php echo '<img src="data:image;base64,' . base64_encode($row['Photo5']) . '" alt="" srcset="" width=100 height=50>'; ?> </td>


                                </form>
                            </tr>
                        <?php } ?>

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

    $id = $_GET['n'];

    delete($id);
}



function delete($id)
{

    $con = new mysqli("localhost", "root", "", "nimcreations");
    $delete = "DELETE FROM sofa WHERE id = $id ";
    $rundelete = mysqli_query($con, $delete);
    if ($rundelete) {
        echo "<script type='text/javascript'>alert('Data Deleted Succesfully!!');location='Admin_Productadd_sofa.php';</script>";
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

$x = 0;
$image = 0;

if (isset($_POST["Uploadsofa"])) {

    $Product_type = $_POST['types'];
    $Product_name = $_POST['Product_name'];
    $Price = $_POST['Price'];
    $Description = $_POST['Description'];
    $color = $_POST['color'];
    $color = implode("<br>", $color);

    foreach ($_FILES['image']['tmp_name'] as $key => $value) {

        if ($_FILES["image"]["error"] == 4) {
            echo
            "<script> alert('Image Does Not Exist'); </script>";
        } else {
            $filemp = addslashes(file_get_contents($_FILES['image']['tmp_name'][$key]));
            $fileName = $_FILES["image"]["name"][$key];
            $fileSize = $_FILES["image"]["size"][$key];
            // $tmpName = $_FILES["IMG_mostpop"]["tmp_name"];

            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));


            if (!in_array($imageExtension, $validImageExtension)) {
                echo
                "<script>
                alert('Invalid Image Extension');
              </script>
              ";
            } else if ($fileSize > 1000000000) {
                echo
                "<script>
                alert('Image Size Is Too Large');
              </script>
              ";
            } else {
                echo  $fileName . '<br>';
            }

            $image = 'image' . $x;
            //echo $image . '<br>';
            if ($image === 'image0') {
                $image1 = $filemp;
            } elseif ($image === 'image1') {
                $image2 = $filemp;
            } elseif ($image === 'image2') {
                $image3 = $filemp;
            } elseif ($image === 'image3') {
                $image4 = $filemp;
            } elseif ($image === 'image4') {
                $image5 = $filemp;
            }

            $x++;
        }
    }




    // $newImageName = uniqid();
    //$newImageName .= '.' . $imageExtension;

    //move_uploaded_file($tmpName, 'img/' . $newImageName);
    $ins = "INSERT INTO `sofa` (`Product_Type`, `Model_No`, `Price`, `Desc` ,`Photo1`,`Photo2`, `Photo3`,`Photo4`,`Photo5`,`Metirial`) VALUES('$Product_type' , '$Product_name' , '$Price', '$Description','$image1', '$image2','$image3','$image4','$image5', '$color')";
    if (mysqli_query($connection, $ins)) {
        echo
        " <script>
                alert('Successfully Added');
                location='Admin_Productadd_sofa.php';
                
              </script>
              ";
    } else {
        echo
        " <script>
                alert('Erorr adding data');
                
              </script>
              ";
    }
}


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



<?php
        } else {

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