<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="CSS/contacttest.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>


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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <link rel="stylesheet" href="CSS\Header.css">
    <link rel="stylesheet" href="fontawesome\css\all.css">

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
                                    <a class="nav-link" href="Aboutus.php">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link Active " href="ContactUs.php" tabindex="-1" aria-disabled="true">Contact Us</a>
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


        <div class="wrapper">
            <div class="overlay">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-11 ">
                        <div class="contact-us text-center">
                            <h3>Contact Us</h3>
                            <p class="mb-5"></p>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-12 col-lg-6 col-xl-6">
                                    <div class="mt-5 text-center px-3">
                                        <div class="d-flex flex-row align-items-center"> <span class="icons"><i class="fa fa-map-marker"></i></span>
                                            <div class="address text-left"> <span>Address</span>
                                                <p> &nbsp &nbsp 14/A, NIM Creations, Matale</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mt-3"> <span class="icons"><i class="fa fa-phone"></i></span>
                                            <div class="address text-left"> <span>Phone</span>
                                                <p> &nbsp &nbsp 075 000 222 1</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mt-3"> <span class="icons"><i class="fa fa-envelope-o"></i></span>
                                            <div class="address text-left"> <span>Email</span>
                                                <p> &nbsp &nbsp Nimcreations@gmail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6  col-sm-12 col-12 col-lg-6">
                                    <div class="text-center px-1">
                                        <div class="forms p-4 py-5  ">
                                            <h5>Send Message</h5>
                                            <div class="mt-4 inputs"> <input type="text" class="form-control" placeholder="Name"> <input type="text" class="form-control" placeholder="Email"> <textarea class="form-control" placeholder="Type your message"></textarea> </div>
                                            <div class="button mt-4 text-left"> <button class="btn btn-dark">Send</button> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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