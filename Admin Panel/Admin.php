<!DOCTYPE html>
<html lang="en">
<?php
require 'DB_Connection.php'; // Add the Database connection into the page
?>
<?php
session_start();
 ?>



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="fontawesome\css\all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/Admin.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="Javascript/admin.js"></script>



    <title>Admin Panel</title>
</head>

<body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php 
if(isset($_SESSION['Email'])){


?>
    
    <nav class="menu" tabindex="0" id="v-pills-tab">
        <div class=" smartphone-menu-trigger">
        </div>
        <header class="avatar">
            <img src="Wrapper.jpg" />
            <h2 style="color: white;" >Admin</h2>
        </header>
        <div class="d-flex align-items-start">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="width: 300px;">
                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Products</button>
                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Orders</button>
            </div>

    </nav>



    <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" style="margin: 50px;">

            <div class="container">

                <div class="row">

                    <!--HOME Carousel part editing code -->


                    <!-- ???????????????????????????? Insert Query into  Database ??????????????-->
                    <?php



                    if (isset($_POST["Upload1"]) &&  ini_set('display_errors', 'Off')) {


                        if ($_FILES["Image"]["error"] == 4) {
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Warning!!</strong> Please Enter The Image First..
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                        } else {
                            $file = addslashes(file_get_contents($_FILES['Image']['tmp_name']));
                            // $insert = "INSERT INTO `image` (`image`) VALUES('$file')";

                            $fileName = $_FILES["Image"]["name"];
                            $fileSize = $_FILES["Image"]["size"];
                            //$tmpName = $_FILES["Image"]["tmp_name"];

                            $validImageExtension = ['jpg', 'jpeg', 'png'];
                            $imageExtension = explode('.', $fileName);
                            $imageExtension = strtolower(end($imageExtension));


                            if (!in_array($imageExtension, $validImageExtension)) {
                                echo
                                "<script>  alert('Invalid Image Extension');
                            </script>
                            ";
                            } else if ($fileSize > 1000000000) {
                                echo
                                "<script>
                            alert('Image Size Is Too Large');
                          </script>
                          ";
                            } else {
                                //$newImageName = uniqid();
                                //$newImageName = '.' . $imageExtension;

                                //move_uploaded_file($tmpName, 'img/' . $newImageName);

                                $insert = "INSERT INTO Main_Carousel (Photo ) VALUES ( '$file' )";
                                $query_run =  mysqli_query($connection, $insert);


                                if ($query_run) {
                                    echo "<script type='text/javascript'>alert('Image Added Succesfully');location='Admin.php';</script>";
                                } else {
                                    echo "Image NOT uploded!!!";
                                }
                            }
                        }
                        //$file = addslashes(file_get_contents($_FILES["Image"]["tmp_name"]));


                    }





                    ?>
                    <!--??????????????????????? End Insert Query into  Database ?????????????????????????-->



                </div>


                <!-- Upload  -->
                <div class="row" style="margin-bottom:60px; border:1px solid red; padding:15px">
                    <div style="color:#fda10d ; font-weight: 700; font-size:20px ">Edit Home Carousel</div><br><br><br>
                    <div class="col-5">
                        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

                        <form action="Admin.php" method="POST" enctype="multipart/form-data">
                            <div class="file-upload">
                                <div class="image-upload-wrap">
                                    <input class="file-upload-input" type='file' name="Image" onchange="readURL(this);" accept="image/*" />
                                    <div class="drag-text">
                                        <h3><i class="fas fa-cloud-upload"></i></h3>
                                    </div>
                                </div>
                                <div class="file-upload-content">
                                    <img class="file-upload-image" src="#" alt="your image" />
                                    <div class="image-title-wrap">
                                    </div>
                                </div>

                                <button type="submit" class="upload" name="Upload1">Upload</button>
                            </div>
                        </form>

                        <br>
                    </div>

                    <div class="col-7">
                        <style>
                            .thd {
                                background: white;
                                position: sticky;
                                top: 0;
                                background-color: #ffe3c4;
                            }
                        </style>

                        <div class="table-wrapper-scroll-y my-custom-scrollbar">

                            <!-- Items Fetching Table -->
                            <table class="table table-hover table-striped mb-0">
                                <tr class="thd">
                                    <th>Poster Number</th>
                                    <th>Poster</th>
                                    <th></th>
                                </tr>

                                <?php

                                $fetch = "SELECT * FROM `Main_Carousel` ";
                                $query_run2 = mysqli_query($connection, $fetch);
                                while ($row = mysqli_fetch_array($query_run2)) { ?>

                                    <tr>
                                        <form action="" method="get">

                                            <?php $id = $row['id']; ?>
                                            <?php echo "<input type='hidden' name='n' value= '$id' >"; ?>

                                            <td><?php echo  $row['id']; ?></td>
                                            <td>
                                                <?php echo '<img src="data:image;base64,' . base64_encode($row['Photo']) . '" alt="" srcset="" width=100 height=50>'; ?> </td>
                                            <!--
                                            <td><img src="img/<?php // echo $row["Photo"]; 
                                                                ?>" width=100 height=50 title="<?php //echo $row['image']; 
                                                                                                                            ?>"></td>
                                            <<td><?php // echo '<img src="data:image;base64, ' . base64_encode($row['Photo']) . '" alt="" srcset="" style = "width:100px; height:50px">'; 
                                                    ?></td>-->

                                            <td><button name="delete" class="delete"><i class="fas fa-trash"></i></button>

                                            </td>
                                        </form>
                                    </tr>
                                <?php } ?>

                            </table>


                        </div>



                        <?php


                        if (isset($_GET['delete'])) {

                            $id = $_GET['n'];

                            delete($id);
                        }



                        function delete($id)
                        {

                            $con = new mysqli("localhost", "root", "", "nimcreations");
                            $delete = "DELETE FROM Main_Carousel WHERE id = $id ";
                            $rundelete = mysqli_query($con, $delete);
                            if ($rundelete) {
                                echo "<script type='text/javascript'>alert('Data Deleted Succesfully!!');location='Admin.php';</script>";
                            } else {
                                echo "Data Not Deleted ";
                            }
                        }

                        ?>


                    </div>


                </div>

                <!--MOST POPULER Items part editing code -->

                <!-- Form for add product MOST POPULER Items -->

                <!-- Upload  -->
                <div class="row" style="background-color:#ececec; margin-top:10px; margin-bottom:60px; border:1px solid black; box-shadow:1px 2px 3px 2px black; padding:15px">
                    <br><br>
                    <div style="color:#fda10d ; font-weight: 700; font-size:20px;  "> Edit Most Populer Slider </div><br>

                    <div class="col-12">
                        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

                        <form action="Admin.php" method="POST" enctype="multipart/form-data">


                            <div class="file-upload">
                                <table>
                                    <tr>
                                        <td> <label for="1">Product Name </label></td>
                                        <td> : <input type="text" name="Product_name" id="" placeholder="Enter the product/model name" style="width:400px; margin:10px" required /><br></td>
                                    </tr>
                                    <tr>
                                        <td> <label for="1">Price </label></td>
                                        <td> : <input type="text" name="Price" id="" placeholder="Enter the Price" style="width:400px; margin:10px" required /><br></td>
                                    </tr>

                                    <tr>
                                        <td>Image</td>
                                        <td>

                                            <div class="image-upload-wrap">
                                                <input class="file-upload-input" accept=".jpg, .jpeg, .png" type='file' name="IMG_mostpop" onchange="readURL(this);" accept="image/*" />
                                                <div class="drag-text">
                                                    <h3><i class="fas fa-cloud-upload"></i></h3>
                                                </div>
                                            </div>
                                            <div class="file-upload-content">
                                                <img class="file-upload-image" src="#" alt="your image" />
                                                <div class="image-title-wrap">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>


                                <button type="submit" class="upload" name="Upload2">Upload</button>


                            </div>


                        </form>

                        <br>
                    </div>


                    <!-- Form for add product MOST POPULER Items -->


                    <!--MOST POPULER Items fetching editing code -->




                    <!-- Get data from form -->

                    <?php



                    if (isset($_POST["Upload2"])) {

                        $Product_name = $_POST['Product_name'];
                        $Price = $_POST['Price'];
                        if ($_FILES["IMG_mostpop"]["error"] == 4) {
                            echo
                            "<script> alert('Image Does Not Exist'); </script>";
                        } else {
                            $filemp = addslashes(file_get_contents($_FILES['IMG_mostpop']['tmp_name']));
                            $fileName = $_FILES["IMG_mostpop"]["name"];
                            $fileSize = $_FILES["IMG_mostpop"]["size"];
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
                                // $newImageName = uniqid();
                                //$newImageName .= '.' . $imageExtension;

                                //move_uploaded_file($tmpName, 'img/' . $newImageName);
                                $query = "INSERT INTO most_populer_slider_home (Photo, Product_name, Price) VALUES('$filemp' , '$Product_name' , '$Price')";
                                if (mysqli_query($connection, $query)) {
                                    echo
                                    " <script>
                                    alert('Successfully Added');
                                    
                                  </script>
                                  ";
                                }
                            }
                        }
                    }

                    ?>

                    <!-- Get data from form -->

                    <!-- Start Fetchin Data from the Database-->


                    <!--End  Fetchin Data from the Database-->

                    <br><br>
                    <div class="table-wrapper-scroll-y my-custom-scrollbar">


                        <table class="table table-hover">
                            <tr class="thd">
                                <th>Product Id</th>
                                <th>Product Name/ Model</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th></th>
                            </tr>


                            <?php

                            $fetch_mp = "SELECT * FROM `most_populer_slider_home`";
                            $run_fetch_mp = mysqli_query($connection, $fetch_mp);

                            while ($mprow = mysqli_fetch_array($run_fetch_mp)) { ?>
                            <tr>
                                <td><?php echo $mprow['id'] . '<br>'; ?></td>
                                <td><?php echo $mprow['Product_name'] . '<br>'; ?></td>
                                <td><?php echo $mprow['Price'] . '<br>'; ?></td>
                                <td><?php echo '<img src="data:image;base64,' . base64_encode($mprow['Photo']) . '" alt="" srcset="" width=100 height=50>'; ?></td>

                                <form action="" method="post">
                                    <?php $mpid = $mprow['id'];
                                    echo "<input type='hidden' name='mpId' value='$mpid'>";
                                    ?>
                                    <td><button name="mpdelete" class="delete"><i class="fas fa-trash"></i></button></td>
                            </tr>
                            </form>
                        <?php } ?>
                        </table>


                    </div>

                </div>
            </div>
        </div>

        <!-- Delete Function --->

        <?php


        if (isset($_POST['mpdelete'])) {



            $mpid = $_POST['mpId'];

            echo $mpid;
            deletemostpop($mpid);
        }


        function deletemostpop($mpid)
        {

            $con = new mysqli("localhost", "root", "", "nimcreations");
            $delete = "DELETE FROM most_populer_slider_home WHERE id = $mpid ";
            $rundelete = mysqli_query($con, $delete);
            if ($rundelete) {
                echo "<script type='text/javascript'>alert('Data Deleted Succesfully!!');location='Admin.php';</script>";
            } else {
                echo "Data Not Deleted ";
            }
        }

        ?>






        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" style="margin: 50px">
            <div class="container">
                <button type="button" style=" font-size:25px; width:200px; height:200px; margin:30px;  margin-left:200px;" class="btn btn-outline-primary" onclick="window.location.href = 'Admin_Productadd_sofa.php';">SOFA </button>
                <button type="button" style=" font-size:25px; width:200px; height:200px;  margin:30px; " class="btn btn-outline-danger" onclick="window.location.href = 'Admin_Productadd_pantry.php';">PANTRY</button><br>
                <button type="button" style=" font-size:25px; width:200px; height:200px;  margin:30px;  margin-left:200px;" class="btn btn-outline-success" onclick="window.location.href = 'Admin_Productadd_beds.php';">BEDS</button>
                <button type="button" style=" font-size:25px; width:200px; height:200px;  margin:30px " class="btn btn-outline-warning" onclick="window.location.href = 'Admin_Productadd_other.php';">OTHER</button>

            </div>
        </div>
        <div class="tab-pane fade " id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" style="margin: 50px;">
            <div class="container">
                <div class="d-grid gap-2 ">
                    <button class="btn btn-warning" type="button">Button</button>
                    <button class="btn btn-warning" type="button">Button</button>
                </div>

            </div>


        </div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" style="margin: 50px;">

        <a href="OdersView.php">CLICK FOR VIEW ODERS</a>
            
          
        </div>
    </div>
    </div>

<?php
}

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



</body>

</html>