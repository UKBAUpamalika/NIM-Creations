<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>


    <!-- Navigation and footer Loading Starting -->


    <script>
        $(function() {

            $('#Footer').load('Footer.php');

        });
    </script>
    <!-- Navigation and footer Loading Ending -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <link rel="stylesheet" href="CSS\Header.css">
    <link rel="stylesheet" href="fontawesome\css\all.css">
    <link rel="stylesheet" href="CSS\About.css">

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
                                    <a class="nav-link Active" href="Aboutus.php">About us</a>
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
                                    <input id="search" type="text" placeholder="What are you looking for?" />
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


        <div class="container">

            <div class="row">


                <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
                <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

                <div class="image-aboutus-banner" style="margin-top:55px">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 overlayer">
                                <h1 class="lg-text">About Us</h1>
                                <div class="image-aboutus-para">NIM CREATIONS. Your Furniture Doctor.</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <br>
            <div class="container  paddingTB60">
                <div class="row">
                    <div class="site-heading text-center">
                        <h3 class="h3_about">KNOW MORE ABOUT NIM CREATIONS...</h3><br>
                        <p class="p_about">We are the best Interior design company which give the oppertunity to customize your own designs. We repair and modify Sofa sets,
                            Pantry Cup boards, Beds and Bed rooms, Wall Arts etc. Always we dilivery product into your place free of charge. which give the oppertunity to customize your own designs. We repair and modify Sofa sets,
                            Pantry Cup boards, Beds and Bed rooms, Wall Arts etc.which give the oppertunity to customize designs.
                        </p>
                        <div class="border_about"></div>
                    </div>
                </div>

            </div>
            <br><br>

            <div class="row">


                <div class="row owner_row">


                    <div class=" col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">

                        <div class="owner_circule x-auto d-block ">

                            <img src="danu.jpg" alt="" class="imageown mx-auto d-block  responsive">

                            <div class="owner_image">
                                <center>
                                    <div class="social-icons">
                                        <a href="https://www.facebook.com/"><i id="social-fb_about" class="fa icon-facebook-square fa-3x social_about"></i></a>
                                        <a href="https://twitter.com/"><i id="social-tw_about" class="fa icon-twitter-square fa-3x social_about"></i></a>
                                        <a href="https://plus.google.com/"><i id="social-gp_about" class="fa icon-google-plus-square fa-3x social_about"></i></a>
                                        <a href="bootsnipp@gmail.com"><i id="social-em_about" class="fa icon-envelope-square fa-3x social_about"></i></a>
                                    </div>
                                </center>
                            </div>




                        </div>
                    </div>

                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12  col-sm-12 col-12 Detail">
                        <div class="Ownerheading">ABOUT ME </div>
                        <div class="Owner_Details">

                            <div class="Detail1">NAME</div>
                            <div class="Detail2">Isuru Heendheniya</div>
                            <div class="Detail1">ROLE</div>
                            <div class="Detail2">Owner/ Lead Designer</div>
                            <div class="Detail1">EMAIL</div>
                            <div class="Detail2">NimCreations@gmail.com</div>
                            <div class="Detail1">PHONE</div>
                            <div class="Detail2">077 000 1238</div>
                            <div class="seemore"> <button type="button" class="btn btn-warning see">Read More</button></div>

                        </div>

                    </div>


                </div>
            </div>





            <br><br><br><br><br><br><br><br>


            <div class="row">
                <div id="Footer"></div>
            </div>

        </div>
</body>




</html>