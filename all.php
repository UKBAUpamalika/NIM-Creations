<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
<?php
require 'Admin Panel/DB_Connection.php'; // Add the Database connection into the page
?>

<head>
    <meta charset="utf-8">
    <title>Beds</title>
    <link rel="stylesheet" href="CSS\Furniture.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">




    <!-- javasccript required for nav bar boostrap 5.1 new version starting -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- javasccript required for nav bar boostrap 5.1 new version Ending -->



    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="fontawesome\css\all.css">

    <!-- Navigation and footer Loading Starting -->
    <script>
        $(function() {

            $('#header').load('Header.html');

        });
    </script>

    <script>
        $(function() {

            $('#Footer').load('Footer.php');

        });
    </script>

    <!-- Navigation and footer Loading Ending -->


    <link rel="stylesheet/scss" type="text/css" href="CSS\Furniture.scss">
    <script src="Javascript\Furniture.js"></script>


    <link rel="stylesheet/scss" type="text/css" href="CSS\Furniture.scss">
    <script src="Javascript\Furniture.js"></script>


    <link rel="stylesheet" href="CSS\Header.css">
    <link rel="stylesheet" href="CSS\product.css">
    <link rel="stylesheet/scss" type="text/css" href="CSS\product.scss">
    <script src="Javascript\Furniture.js"></script>
    <link rel="stylesheet" href="fontawesome\css\all.css">
    <title> Beds</title>
</head>

<body>
    <div class="container">

        <div class="row">

            <!--Navigation bar===========================================================================================================================-->
            <!--Navigation bar===========================================================================================================================-->

            <!--offcanvas Starting-->
            <div class="container">

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">

                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">

                        <div class="dropdown mt-3">

                            <ul class="navbar-nav ml-auto text-right">
                                <li class="nav-item ">
                                    <a class="nav-link Active" href="Home.php">Home </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Services
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbar Dropdown Menu Link">
                                        <li><a class="dropdown-item" href="Furniture.php">Furniture</a></li>
                                        <li><a class="dropdown-item" href="#">Interior Design</a></li>
                                        <li><a class="dropdown-item" href="#">Transportation</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="Aboutus.php">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="ContactUs.php" tabindex="-1" aria-disabled="true">Contact Us</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <!--offcanvas ending-->



                <div class="header" id="nav_bar_freez">
                    <nav class="navbar navbar-expand-lg navbar-light ">
                        <a class="navbar-brand" href="#"><img src="Images\logo.jpg" class="logo" alt="" srcset=""></a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" href="#offcanvas" role="button" aria-controls="offcanvasExample">
                            <span class="navbar-toggler-icon"></span>
                        </button>



                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto text-right">
                                <li class="nav-item ">
                                    <a class="nav-link " href="Home.php">Home </a>
                                </li>
                                <li class="nav-item dropdown Active">
                                    <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Services
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbar Dropdown Menu Link">
                                        <li><a class="dropdown-item" href="Furniture.php">Furniture</a></li>
                                        <li><a class="dropdown-item" href="#">Interior Design</a></li>
                                        <li><a class="dropdown-item" href="#">Transportation</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="Aboutus.php">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="ContactUs.php" tabindex="-1" aria-disabled="true">Contact Us</a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                    <div class="s130">
                        <form>
                            <div class="inner-form">
                                <div class="input-field first-wrap">
                                    <div class="svg-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                            </path>
                                        </svg>
                                    </div>
                                    <input type="search" placeholder="What are you looking for?" name="search" id="search" class="searchbox-input" onkeyup="buttonUp();" required>
                                </div>
                                <div class="input-field second-wrap">
                                    <button class="btn-search" type="button">Search</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>

                <!-- NAVBAR FREEZING JAVA SCRIPT STARTING -->

                <script>
                    window.onscroll = function() {
                        myFunction()
                    };

                    var header = document.getElementById("nav_bar_freez");
                    var sticky = header.offsetTop;

                    function myFunction() {
                        if (window.pageYOffset > sticky) {
                            header.classList.add("sticky");
                        } else {
                            header.classList.remove("sticky");
                        }
                    }
                </script>

                <!-- NAVBAR FREEZING JAVA SCRIPT STARTING -->

                <!--===========================================================================end Row1=====================================================-->

            </div>



        </div>



        <div class="pageheading">ALL PRODUCTS...</div>
        <div class="border_about"></div>


        <script src="jsc.js" defer></script>



        <!--**************************Cards section Starting***********************************-->
        <?php
        $sofa = "SELECT * FROM sofa";
        $run_sofa = mysqli_query($connection, $sofa); ?>

        <div class="container">

            <div class="row ">
                <!--SECTION STARTING -->
                <?php while ($Sofa_fetch = mysqli_fetch_array($run_sofa)) {

                ?>
                    <div class="C col-12 col-sm-6  col-md-6 col-xl-3 col-lg-3 col-xxl-3  ">

                        <?php $table = 'sofa' ?>

                        <div class="card " onclick="location.href='Productdetails.php?page=&id=<?= $Sofa_fetch['id'] ?>&table=<?= $table ?>'">
                            <!--Card Starting-->
                            <style>
                                a {
                                    all: unset;
                                }

                                a,
                                a:hover,
                                a:focus,
                                a:active {
                                    text-decoration: none;
                                    color: inherit;
                                }
                            </style>
                            <div class="product_Image"><?php echo '<img src="data:image;base64,' . base64_encode($Sofa_fetch['Photo1']) . '" alt="" srcset=""  class="product_Image" >'; ?></div>

                            <table class="t">
                                <tr>
                                    <td>
                                        <div class="product-Details "><?php echo $Sofa_fetch['Product_Type']; ?></div>
                                        <div class="model"><?php echo $Sofa_fetch['Model_No']; ?><br></div>
                                        <div class="price">Rs.<?php echo $Sofa_fetch['Price']; ?>.00</div>
                                    </td>

                                    <td>

                                        <div class="buy-icon"><i class="fa-solid fa-cart-shopping"></i></div>

                                    </td>
                                </tr>
                            </table>
                            <?php $id = $Sofa_fetch['id'] ?>
                            <?php $table = 'sofa' ?>

                            <?php echo "<input type='hidden' name='table' value= '$table' >"; ?>
                            <?php echo "<input type='hidden' name='id' value= '$id' >"; ?>

                            <div class="inside">
                                <div class="icon"><i class="fa-solid fa-circle-info"></i></div>
                                <div class="contents">
                                    <h3>NIM CREATIONS</h2>
                                        Call us today for sofa, pantry cupboards, bedroom sets, sofa repair, interior
                                        designing and all kind of customized furniture needs.<br>
                                        ☎ 0771687710
                                        Matale
                                        <table>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </table>
                                </div>
                            </div>

                        </div>
                        <!--Card end-->


                    </div>
                <?php

                } ?>


                <?php
                $Bed = "SELECT * FROM beds
            ";
                $run_Bed = mysqli_query($connection, $Bed); ?>

                <!--SECTION STARTING -->
                <?php while ($Beds_fetch = mysqli_fetch_array($run_Bed)) {

                ?>
                    <div class="C col-12 col-sm-6  col-md-6 col-xl-3 col-lg-3 col-xxl-3  ">

                        <?php $table = 'beds' ?>

                        <div class="card " onclick="location.href='Productdetails.php?page=&id=<?= $Beds_fetch['id'] ?>&table=<?= $table ?>'">
                            <!--Card Starting-->
                            <style>
                                a {
                                    all: unset;
                                }

                                a,
                                a:hover,
                                a:focus,
                                a:active {
                                    text-decoration: none;
                                    color: inherit;
                                }
                            </style>
                            <div class="product_Image"><?php echo '<img src="data:image;base64,' . base64_encode($Beds_fetch['Photo1']) . '" alt="" srcset=""  class="product_Image" >'; ?></div>

                            <table class="t">
                                <tr>
                                    <td>
                                        <div class="product-Details "><?php echo $Beds_fetch['Product_Type']; ?></div>
                                        <div class="model"><?php echo $Beds_fetch['Model_No']; ?><br></div>
                                        <div class="price">Rs.<?php echo $Beds_fetch['Price']; ?>.00</div>
                                    </td>

                                    <td>

                                        <div class="buy-icon"><i class="fa-solid fa-cart-shopping"></i></div>

                                    </td>
                                </tr>
                            </table>
                            <?php $id = $Beds_fetch['id'] ?>
                            <?php $table = 'sofa' ?>

                            <?php echo "<input type='hidden' name='table' value= '$table' >"; ?>
                            <?php echo "<input type='hidden' name='id' value= '$id' >"; ?>

                            <div class="inside">
                                <div class="icon"><i class="fa-solid fa-circle-info"></i></div>
                                <div class="contents">
                                    <h3>NIM CREATIONS</h2>
                                        Call us today for sofa, pantry cupboards, bedroom sets, sofa repair, interior
                                        designing and all kind of customized furniture needs.<br>
                                        ☎ 0771687710
                                        Matale
                                        <table>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </table>
                                </div>
                            </div>

                        </div>
                        <!--Card end-->


                    </div>
                <?php

                } ?>



                <?php
                $pan = "SELECT * FROM pantries
            ";
                $run_pan = mysqli_query($connection, $pan); ?>

                <!--SECTION STARTING -->
                <?php while ($pan_fetch = mysqli_fetch_array($run_pan)) {

                ?>
                    <div class="C col-12 col-sm-6  col-md-6 col-xl-3 col-lg-3 col-xxl-3  ">

                        <?php $table = 'pantries' ?>

                        <div class="card " onclick="location.href='Productdetails.php?page=&id=<?= $pan_fetch['id'] ?>&table=<?= $table ?>'">
                            <!--Card Starting-->
                            <style>
                                a {
                                    all: unset;
                                }

                                a,
                                a:hover,
                                a:focus,
                                a:active {
                                    text-decoration: none;
                                    color: inherit;
                                }
                            </style>
                            <div class="product_Image"><?php echo '<img src="data:image;base64,' . base64_encode($pan_fetch['Photo1']) . '" alt="" srcset=""  class="product_Image" >'; ?></div>

                            <table class="t">
                                <tr>
                                    <td>
                                        <div class="product-Details "><?php echo $pan_fetch['Product_Type']; ?></div>
                                        <div class="model"><?php echo $pan_fetch['Model_No']; ?><br></div>
                                        <div class="price">Rs.<?php echo $pan_fetch['Price']; ?>.00</div>
                                    </td>

                                    <td>

                                        <div class="buy-icon"><i class="fa-solid fa-cart-shopping"></i></div>

                                    </td>
                                </tr>
                            </table>
                            <?php $id = $pan_fetch['id'] ?>
                            <?php $table = 'pantries' ?>

                            <?php echo "<input type='hidden' name='table' value= '$table' >"; ?>
                            <?php echo "<input type='hidden' name='id' value= '$id' >"; ?>

                            <div class="inside">
                                <div class="icon"><i class="fa-solid fa-circle-info"></i></div>
                                <div class="contents">
                                    <h3>NIM CREATIONS</h2>
                                        Call us today for sofa, pantry cupboards, bedroom sets, sofa repair, interior
                                        designing and all kind of customized furniture needs.<br>
                                        ☎ 0771687710
                                        Matale
                                        <table>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </table>
                                </div>
                            </div>

                        </div>
                        <!--Card end-->


                    </div>
                <?php

                } ?>



            </div><!-- row end div -->
            <!--**************************Cards section Ending***********************************-->

            <br><br>


            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item " aria-current="page">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>

            <br><br><br><br><br><br><br><br>
            <div class="row">
                <div id="Footer"></div>
            </div>



        </div>
</body>






<!--
                <a class="A" style="" href="Productdetails.php?page=&id=<?= $Sofa_f['id'] ?>&table=<?= $table ?>" class="a">
                    <div class="card my-3 col-12 col-sm-6  col-md-6 col-xl-3 col-lg-3 col-xxl-3" onclick="location.href='Productdetails.php?page=&id=<?= $Sofa_f['id'] ?>&table=<?= $table ?>'">
                -->

</html>