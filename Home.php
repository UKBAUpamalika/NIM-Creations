<!DOCTYPE html>
<html lang="en">

<?php
require 'Admin Panel/DB_Connection.php'; // Add the Database connection into the page
?>
<?php
session_start();

?>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<link rel="shortcut icon" type="x-icon" href="Images/logo.jpg">


    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fontawesome cdn closed -->


    <!-- Footer links starting-->
    <!-- Required meta tags -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="NIM _Footer\fonts\icomoon\style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="NIM _Footer\css\bootstrap.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="NIM _Footer\css\style.css">
    <!-- Footer links endiing-->


    <!-- owl carousel starting -->
    <link rel="stylesheet" href="OwlCarousel2-2.3.4\dist\assets\owl.carousel.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4\dist\assets\owl.theme.default.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4\dist\assets\owl.theme.default.min.css">
    <!-- owl carousel ending -->

    <!-- owl carousel javasccript starting -->

    <script src="OwlCarousel2-2.3.4\src\js\owl.carousel.js"></script>
    <!-- owl carousel javasccript ending -->

    <!-- javasccript starting -->

    <script src="Javascript\home.js"></script>
    <!-- javasccript ending -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <!-- javasccript required for nav bar boostrap 5.1 new version starting -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- javasccript required for nav bar boostrap 5.1 new version Ending -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <title> Home page</title>
    <link rel="stylesheet" href="CSS\home.css">






</head>
<!--========================================================Header Closed=============================================================-->


<body>
    <div class="container">
        <!--container opened-->

        <!--Row1-->
        <!--Navigation bar===========================================================================================================================-->

        <!--offcanvas Starting-->


        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <li class="nav-item">
                    <a class="nav-link " href="ContactUs.php" tabindex="-1" aria-disabled="true">Login</a>
                </li>
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
            </nav>

            <!-- Load an icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <nav>

                <?php
                if (isset($_SESSION['Userid']) && isset($_SESSION['Email'])) {


                    echo '
                    <ul class="text-right" style="align-items: right;">
                    <button onclick="window.location.href=\'logout.php\'" type="button" class="btn btn-secondary btn-sm profile"><i class="fas fa-sign-in-alt"></i>Log Out</button>
                    &nbsp;&nbsp;

                    <div class="btn-group">
                        <button type="button" class="btn btn-warning btn-sm dropdown-toggle profile" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>'; ?> <?php echo $_SESSION['Username']; ?> <?php echo '
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item profile" href="Order_History.php">Order History</a></li>
                        </ul>
                    </div>

            
                    </ul>
                    ';
                                                                                                                    } else {
                                                                                                                        echo '
                    
                    <ul class="text-right" style="align-items: right;">
                    <button onclick="window.location.href=\'login.php\'" id="log" type="button" class="btn btn-warning btn-sm profile"><i class="fa fa-fw fa-user"></i>Log in</button>
                    <button onclick="window.location.href=\'signup.php\'" type="button" class="btn btn-secondary btn-sm profile"><i class="fas fa-sign-in-alt"></i>&nbsp;Register</button>
                </ul>
                ';
                                                                                                                    }


                                                                                                                        ?>

            </nav>


            <style>
                .profile {
                    font-size: 12px !important;
                }
            </style>







            <div class="s130">
                <form>
                    <div class="inner-form">
                        <div class="input-field first-wrap">
                            <div class="svg-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                                </svg>
                            </div>
                        
                            <input id="search" type="search" name="search" onkeyup="Searchfun()" placeholder="What are you looking for?" />
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


        <div class="row">
            <!--Row2-->
            <div class="row">
                <!--title with carousel-->
                <div class="col-12 col-sm-12 col-md-12  col-lg-6	col-xl-6 col-xxl-6">
                    <h6 class="centered mx-auto text-center">MAKE YOUR DREAM A REALITY</h6>
                    <p class="centered1 mx-auto text-center">Your Furniture Doctor...</p>

                </div>

                <div class=" col-12 col-sm-12 col-md-12  col-lg-6	col-xl-6 col-xxl-6 " style="margin-bottom: 50px;">
                    <div class="centered2">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>


                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="Images/c10.jpg" class=" mx-auto d-block w-100" alt="c5">
                                </div>
                                <?php

                                $h_carousel_fetch = "SELECT * FROM main_carousel"; //Fetch items main_carousel table
                                $Run_h_carousel_fetch = mysqli_query($connection, $h_carousel_fetch);
                                while ($Carousel_row = mysqli_fetch_array($Run_h_carousel_fetch)) { ?>


                                    <div class="carousel-item ">
                                        <?php echo '<img src="data:image;base64,' . base64_encode($Carousel_row['Photo']) . '" alt="" srcset="" class="mx-auto d-block w-100" >';
                                        ?>
                                    </div>
                                <?php } ?>
                            </div>


                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>


            </div>
            <!--title with carousel-->

        </div>
        <!--End Row2-->



        <div class="row">
            <!--=====================     Services  Start  ===============================-->




            <div class="Browse">Browse Our Best Services...</div>
            <div class="cards-list">

                <div class="Category_card 1" onclick="location.href='Sofa.php'">
                    <div class="card_image"> <img src="Images\products\category-ICONS\sofa2.jpg" /> </div>
                    <div class="card_title title-white">
                        <p>Sofa</p>
                    </div>
                </div>
                <div class="Category_card 1" onclick="location.href='Pantries.php'">
                    <div class="card_image"> <img src="Images\products\category-ICONS\pantry-color.jpg" /> </div>
                    <div class="card_title title-white">
                        <p>Pantries</p>
                    </div>
                </div>
                <div class="Category_card 1" onclick="location.href='Beds.php'">
                    <div class="card_image"> <img src="Images\products\category-ICONS\beds 2.png" /> </div>
                    <div class="card_title title-white">
                        <p>Bed sets</p>
                    </div>
                </div>
                <div class="Category_card 3 " onclick="location.href='Furniture.php'">
                    <div class="card_image">
                        <img src="Images\products\category-ICONS\repair.jpg" />
                    </div>
                    <div class="card_title">
                        <p>Furniture Repair</p>
                    </div>
                </div>

                <div class="Category_card 3" onclick="location.href='Furniture.php'">
                    <div class="card_image">
                        <img src="Images\products\category-ICONS\custamize color.jpg" />
                    </div>
                    <div class="card_title">
                        <p>Customize Own Furnitures</p>
                    </div>
                </div>

                <div class="Category_card 4">
                    <div class="card_image">
                        <img src="Images\products\category-ICONS\inter.jpg" />
                    </div>
                    <div class="card_title title-black">
                        <p>Interior Design</p>
                    </div>
                </div>

            </div>

        </div>
        <!--=====================     Services  Start  ===============================-->
        <!-- <h1>Small video 10s repair sofa and before after and custamize with different mesharment and fabric </h1>

                                -->






        <div class="row">
            <!--Row4-->
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
            </head>

            <body>

                <!--START connect to the database and fetch data query satrt-->
                <?php
                //$latest_product = "SELECT * FROM sofa UNION SELECT * FROM sofa UNION SELECT * FROM sofa";
                $mst_pop = "SELECT * FROM most_populer_slider_home";
                $run_mst_pop = mysqli_query($connection, $mst_pop);
                ?>




                <!-- END connect to the database and fetch data query satrt-->

                <h3>
                    <div class="products-heading">NIM Creations - Most Popular items......
                        <hr>
                    </div>
                </h3>
                <div class="container-fluid my-5">
                    <div class="row">
                        <div class="col-12 m-auto">
                            <div class="owl-carousel owl-theme">

                                <?php
                                while ($mp_row = mysqli_fetch_array($run_mst_pop)) {


                                ?>

                                    <div class="item">
                                        <div class="card border-1 mx-auto d-block">
                                            <?php echo '<img src="data:image;base64,' . base64_encode($mp_row['Photo']) . '" alt="" srcset=""  class="card-img-top mx-auto d-block">'  ?>
                                            <div class="card-body">
                                                <div class="card-title text-center">
                                                    <div class="product-title"><?php echo $mp_row['Product_name']; ?></div>
                                                    <div class="products-price"> Rs <?php echo $mp_row['Price']; ?>.00</div>
                                                    <button type="button" class="btn btn-warning buynow">Lets Go</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>


                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

                <!-- Option 1: Bootstrap Bundle with Popper -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
                <script>
                    $('.owl-carousel').owlCarousel({
                        margin: 15,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 2000,
                        autoplayHoverPause: true,

                        nav: true,
                        responsive: {
                            0: {
                                items: 2
                            },
                            400: {
                                items: 2
                            },
                            600: {
                                items: 3
                            },
                            1000: {
                                items: 5
                            }
                        }
                    })
                </script>

            </body>
            <!--   +====================================================================Panty cupbpard====================================================================-->



            <!--   +========================================================================================================================================-->



        </div> <!-- end Row4-->





        <!-- offer/deal section starts  -->
        <div class="container">

            <div class="row">
                <div class="offerhead">Why NIM CREATIONS Speacial ?...</div>
                <center>
                    <div class="border_offer"></div>
                </center>
                <div class="col-12 col-sm-12	col-md-4	col-lg-4	col-xl-4 col-xxl-4 ">
                    <div class="Card_ani"> <img src="Freeshipping.gif" alt="" class="mx-auto d-block"></div>
                    <div class="offerdet">Free Delivery</div>
                </div>
                <div class="col-12  col-sm-12	col-md-4	col-lg-4	col-xl-4 col-xxl-4 ">
                    <div class="Card_ani"><img src="Woodworker.gif" alt="" style="height: 200px; width:230px" class="mx-auto d-block"></div>
                    <div class="offerdet">Repair as your wish</div>
                </div>
                <div class="col-12 col-sm-12	col-md-4	col-lg-4	col-xl-4 col-xxl-4 ">
                    <div class="Card_ani"> <img src="int.gif" alt="" class="mx-auto d-block"></div>
                    <div class="offerdet">Interior Designs</div>
                </div>


            </div>

        </div>


        <br><br>
        <!--end Row5-->

        <div class="row">


            <img src="Images\Poster1.jpg" alt="" class="sizes">
            <br>
            <br>
            <br>


        </div>


        <div class="row">

        </div>

        <!--Whats app Icon Start -->



        <a href="https://api.whatsapp.com/send?phone=94750892242&text=I'm%20interested%20in%20your%20services" class="whatsapp_float btn-whatsapp-pulse" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>



        <!--<a href="https://wa.me/94750892242" class="whatsapp_float" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
-->
        <style>
            /* for desktop */
            .whatsapp_float {
                position: fixed;
                width: 60px;
                height: 60px;
                bottom: 40px;
                right: 40px;
                background-color: #25d366;
                color: #FFF;
                border-radius: 50px;
                text-align: center;
                font-size: 30px;
                box-shadow: 2px 2px 3px #999;
                z-index: 100;
            }

            .whatsapp-icon {
                margin-top: 16px;
            }

            /* for mobile */
            @media screen and (max-width: 767px) {
                .whatsapp-icon {
                    margin-top: 10px;
                }

                .whatsapp_float {
                    width: 40px;
                    height: 40px;
                    bottom: 50px;
                    right: 15px;
                    font-size: 22px;
                }
            }

            .btn-whatsapp-pulse {

                animation-name: pulse;
                animation-duration: 1.5s;
                animation-timing-function: ease-out;
                animation-iteration-count: infinite;
            }

            @keyframes pulse {
                0% {
                    box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.5);
                }

                80% {
                    box-shadow: 0 0 0 14px rgba(37, 211, 102, 0);
                }
            }

            .btn-whatsapp-pulse-border {
                bottom: 120px;
                right: 20px;
                animation-play-state: paused;
            }
        </style>

        <!--whatsapp Icon End -->


        <script>
            function Searchfun() {
                window.location.href = "all.php";

            }
        </script>







        <div class="row">
            <!--Row6   ==================================================Foooterr+++++++++================================================================================-->
            <div class="content d-flex align-items-center bg-light">
            </div>

            <footer class="footer-20192">
                <div class="site-section">
                    <div class="container">

                        <div class="cta d-block d-md-flex align-items-center px-5">
                            <div>
                                <h3 class="mb-0">Ready for design your house?</h3>
                                <h5 class="text-dark">Let's get started!</h5>
                            </div>
                            <div class="ml-auto">
                                <a href="#" class="btn btn-dark rounded-0 py-3 px-5 mx-auto d-block">
                                    <p class="contactbuton">Contact Us</p>
                                </a>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm mx-auto text-center ">
                                <a href="#" class="footer-logo"><img src="Images\logo.jpg" class="logo mx-auto d-block" alt="" srcset="">

                                </a>
                                <p class="copyright ">
                                    <small class="mx-auto text-center">&copy; 2022</small>
                                </p>
                            </div>
                            <div class="col-sm">
                                <h3 class="footer-head-links">Services</h3>
                                <ul class="list-unstyled links">
                                    <li><a href="#">Customized Interior Designs.</a></li>
                                    <li><a href="#">Modern and classical Pantry Cupboards.</a></li>
                                    <li><a href="#">Furniture Repair.</a></li>
                                    <li><a href="#">Customized Sofa Designs.</a></li>
                                    <li><a href="#">Furniture Repair</a></li>

                                </ul>
                            </div>
                            <div class="col-sm">
                                <h3 class="footer-head-links">Company</h3>
                                <ul class="list-unstyled links">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>
                            <div class="col-sm">
                                <h3 class="footer-head-links">Further Information</h3>
                                <ul class="list-unstyled links">
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h3 class="footer-head-links">Follow us</h3>
                                <ul class="list-unstyled social">
                                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                    <li><a href="#"><span class="icon-medium"></span></a></li>
                                    <li><a href="#"><span class="icon-paper-plane"></span></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </footer>
            <script src="js/jquery-3.3.1.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>


        </div>
        <!--endRow6-->






    </div>
    <!--container closed-->
</body>

</html>