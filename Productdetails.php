<?php
session_start();
require 'Admin Panel/DB_Connection.php'; // Add the Database connection into the page
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Description</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



    <!--product card CSS file import-->
    <link rel="stylesheet" href="CSS/Product_Details_page.css">
    <!--product card CSS file import Ending-->



    <!-- Navigation and footer Loading Starting -->
    <script>
        $(function() {

            $('#Header').load('Header.html');

        });
    </script>

    <script>
        $(function() {

            $('#Footer').load('Footer.php');

        });
    </script>

    <!-- Navigation and footer Loading Ending -->
</head>

<body>
    <div class="container">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <div class="row">
            <div id="Header"></div>
        </div>

        <div class="row">


            <br>

        </div>






        <link rel='stylesheet' href='https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css'>

        <div class="container">

            <div class="container-fluid mt-2 mb-3">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-md-5 pr-2">
                            <?php
                            if (isset($_GET['id'])) {

                                $table = $_GET['table'];
                                $id = $_GET['id'];
                                $sel = "SELECT * FROM $table WHERE id=$id";
                                $runsel = mysqli_query($connection, $sel);
                                while ($row = mysqli_fetch_array($runsel)) {
                                    $_SESSION['Productid_for_Oder'] = $row['id'];
                                    $_SESSION['Tablename_for_Oder'] = $table;
                            ?>


                                    <div class="demo">
                                        <ul id="lightSlider">

                                            <?php echo '<li  data-thumb="data:image;base64,' . base64_encode($row['Photo1']) .  '" width=10 height=5 > '; ?> <?php echo '<img src="data:image;base64,' . base64_encode($row['Photo1']) . '" alt="" srcset="" class="M">'; ?> </li>
                                            <?php echo '<li class="L" data-thumb="data:image;base64,' . base64_encode($row['Photo2']) . '" width=10 height=5> '; ?> <?php echo '<img src="data:image;base64,' . base64_encode($row['Photo2']) . '" alt="" srcset="" class="M">'; ?> </li>
                                            <?php echo '<li class="L" data-thumb="data:image;base64,' . base64_encode($row['Photo3']) . '" width=10 height=5> '; ?> <?php echo '<img src="data:image;base64,' . base64_encode($row['Photo3']) . '" alt="" srcset="" class="M">'; ?> </li>
                                            <?php echo '<li class="L" data-thumb="data:image;base64,' . base64_encode($row['Photo4']) . '" width=10 height=5> '; ?> <?php echo '<img src="data:image;base64,' . base64_encode($row['Photo4']) . '" alt="" srcset="" class="M">'; ?> </li>
                                            <?php echo '<li class="L" data-thumb="data:image;base64,' . base64_encode($row['Photo5']) . '" width=10 height=5> '; ?> <?php echo '<img src="data:image;base64,' . base64_encode($row['Photo5']) . '" alt="" srcset="" class="M">'; ?> </li>

                                        </ul>
                                    </div>
                                    <style>
                                        .L {
                                            width: 3px;
                                            height: 300px !important;
                                        }

                                        .M {
                                            width: 480px !important;
                                            height: 500px !important;

                                        }

                                        @media only screen and (max-width:1000px) {

                                            .M {
                                                width: 300px !important;
                                                height: 300px !important;

                                            }
                                        }
                                    </style>

                        </div>
                        <div class="col-md-7" class="paddingleft">
                            <div class="card">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="p-ratings"> </div>
                                </div>

                                <div class="about">
                                    <h5 class="font-weight-bold"> <?php echo $row['Product_Type']; ?> </h5>
                                    <h6 style="color:#f79a19"><?php echo $row['Model_No']; ?></h6>
                                    <h6 class="font-weight-bold">Rs.<?php echo $row['Price']; ?></h6>
                                </div>

                                <div class="product-description">
                                    <hr>
                                    <div><span class="font-weight-bold">Select a Color:</span><span></span></div>
                                    <div class="my-color"> <label class="radio"> <input type="radio" name="gender" value="MALE" checked> <span class="red"></span> </label> <label class="radio"> <input type="radio" name="gender" value="FEMALE"> <span class="blue"></span> </label> <label class="radio"> <input type="radio" name="gender" value="FEMALE"> <span class="green"></span> </label> <label class="radio"> <input type="radio" name="gender" value="FEMALE"> <span class="orange"></span> </label> </div>
                                    <div class="d-flex flex-row align-items-center"> <i class="fa fa-calendar-check-o"></i> </div>
                                    <div class="mt-2"> <span class="font-weight-bold">
                                            <hr>Description
                                        </span>
                                        <p style="color:#616160; font-size:14px"><br> <?php echo $row['Desc']; ?></p>
                                        <div class="bullets">
                                            <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Best in Quality</span> </div>
                                            <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Free Transport</span> </div>
                                            <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Sturdy laminate surfaces</span> </div>
                                            <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Relocation friendly design</span> </div>
                                            <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Easy-access hydraulic storage</span> </div>
                                        </div>
                                    </div>

                                    <div class="buttons"> <button class="btn  btn-long buy" onclick="oderconfirm()">Buy now</button> </div>
                                    <hr>
                                    <script>
                                        function oderconfirm() {
                                            Swal.fire({
                                                title: 'Do you need to oder this item?',
                                                text: "You won't be able to revert this!",
                                                showCancelButton: true,
                                                confirmButtonColor: 'rgb(255, 162, 0)',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Yes, Oder now!'
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                   
                                                        window.location = 'Oder.php';
                                                    
                                                }
                                            })
                                        }
                                    </script>

                            <?php
                                }
                            }
                            ?>


                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
                <script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>
                <script>
                    $('#lightSlider').lightSlider({
                        gallery: true,
                        item: 1,
                        loop: true,
                        slideMargin: 0,
                        thumbItem: 9
                    });
                </script>



            </div>






            <div class="row" style="margin-top: 70px;">
                <div id="Footer"></div>
            </div>
        </div>


</body>

</html>