<?php
require 'Admin Panel/DB_Connection.php'; // Add the Database connection into the page
?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>Furniture</title>
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

   <link rel="stylesheet" href="CSS\Header.css">

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


   <style>
      /*NAV BAR FREEZING CSS STARTING */
      .navbar {
         background-color: white;
         margin-bottom: 10px;
      }

      .sticky {
         position: sticky;
         top: 0;
         width: 100%;
         z-index: 10;
      }

      .sticky_footer {
         position: sticky;
         top: 0;
         width: 100%;
         z-index: 10;
      }




      /*NAV BAR FREEZING CSS Ending */
   </style>



</head>

<body>
   <div class="container">
      <!--container Start-->

      <div class="row">

         <!--Row1-->
         <!--Navigation bar===========================================================================================================================-->

         <!--offcanvas Starting-->


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



         <div class="header" id="nav_bar_freezed">
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
            <div class="s130">
               <form>
                  <div class="inner-form">
                     <div class="input-field first-wrap">
                        <div class="svg-wrapper">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                              <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
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

            var header = document.getElementById("nav_bar_freezed");
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

      <br>
      <h5>FURNITURES</h5>
      

      <div class="row">
         <!--=========================SOFA ROW START===============================================-->
         <div class="wrapper">
            <div class="hedingproduct "> <a style="cursor:pointer; color: #e08300 ; text-decoration:underline !important" href="Sofa.php">NIM Creations..... Sofa...</a>
               <hr><br>
            </div>
            <?php
            $sofa = "SELECT * FROM sofa";
            $run_sofa = mysqli_query($connection, $sofa); ?>

            <div class="carousel owl-carousel">

               <?php while ($Sofa_fetch = mysqli_fetch_array($run_sofa)) { ?>
                  <!--<form action="Productdetails.php" method="get">
                     <button class="go" name="Go">-->
                  <?php $table = 'sofa' ?>
                  <a href="Productdetails.php?page=&id=<?= $Sofa_fetch['id'] ?>&table=<?= $table ?>" class="a">
                     <div class="card ">
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
                        <div class="product_Image"> <?php echo '<img src="data:image;base64,' . base64_encode($Sofa_fetch['Photo1']) . '" alt="" srcset=""  class="product_Image" >'; ?></div>

                        <table>
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
                  </a>
                  <!--Card end-->

               <?php } ?>
            </div>
         </div>




         <script>
            const nextIcon = '<div class="next"><i class="fa-solid fa-arrow-right-long">  </i></div>';
            const prevIcon = '<div class="prev"><i class="fa-solid fa-arrow-left-long">  </i></div';



            $(".carousel").owlCarousel({
               margin: 10,
               loop: true,
               autoplay: true,
               autoplayTimeout: 2000,
               autoplayHoverPause: true,
               nav: true,
               navText: [
                  prevIcon,
                  nextIcon
               ],
               responsive: {
                  0: {
                     items: 1,

                  },
                  600: {
                     items: 2,

                  },
                  1000: {
                     items: 4,

                  }
               }
            });
         </script>





      </div>
      <!--==============================SOFA ROW END===================================================-->
      <!--
      <div class="row">
         <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-warning me-md-2" type="button" onclick="window.location.href='Products.php';">See more</button>
            <button class="btn btn-warning" type="button">Home</button>
         </div>
      </div>
         -->


      <div class="row">
         <!--=========================PANTRIES ROW START===============================================-->


         <div class="wrapper">
            <br>
            <div class="hedingproduct "> <a style="cursor:pointer; color: #e08300 ; text-decoration:underline !important" href="Pantries.php"> NIM Creations.....Pantries... </a>
               <hr><br>
            </div>
            <div class="carousel owl-carousel">
               <?php
               $pantries = "SELECT * FROM pantries";
               $run_pantries = mysqli_query($connection, $pantries); ?>
               <?php while ($Pantries_fetch = mysqli_fetch_array($run_pantries)) { ?>
                  <?php $tablep = 'pantries' ?>
                  <a href="Productdetails.php?page=&id=<?= $Pantries_fetch['id'] ?>&table=<?= $tablep ?>" class="a">
                     <div class="card ">
                        <!--Card Starting-->

                        <div class="product_Image"><?php echo '<img src="data:image;base64,' . base64_encode($Pantries_fetch['Photo1']) . '" alt="" srcset=""  class="product_Image" >'; ?></div>

                        <table>
                           <tr>
                              <td>
                                 <div class="product-Details "><?php echo $Pantries_fetch['Product_Type'] ?></div>
                                 <div class="model"><?php echo $Pantries_fetch['Model_No'] ?><br></div>
                                 <div class="price">Rs.<?php echo $Pantries_fetch['Price'] ?></div>
                              </td>

                              <td>

                                 <div class="buy-icon"><i class="fa-solid fa-cart-shopping"></i></div>

                              </td>
                           </tr>
                        </table>

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

                  <?php } ?>
                  </a>
            </div>
         </div>




         <script>
            const PANnextIcon = '<div class="next"><i class="fa-solid fa-arrow-right-long">  </i></div>';
            const PANprevIcon = '<div class="prev"><i class="fa-solid fa-arrow-left-long">  </i></div';



            $(".carousel").owlCarousel({
               margin: 10,
               loop: true,
               autoplay: true,
               autoplayTimeout: 2000,
               autoplayHoverPause: true,
               nav: true,
               navText: [
                  PANprevIcon,
                  PANnextIcon
               ],
               responsive: {
                  0: {
                     items: 1,

                  },
                  600: {
                     items: 2,

                  },
                  1000: {
                     items: 4,

                  }
               }
            });
         </script>





      </div>
      <!--==============================PANTRIES ROW END===================================================-->


      <div class="row">
         <!--=========================BEDS ROW START===============================================-->


         <div class="wrapper">
            <div class="hedingproduct "> <a style="cursor:pointer; color: #e08300 ; text-decoration:underline !important" href="Beds.php"> NIM Creations.....Bed Sets... </a>
               <hr><br>
            </div>
            <div class="carousel owl-carousel">
               <?php
               $beds = "SELECT * FROM beds";
               $run_beds = mysqli_query($connection, $beds); ?>
               <?php while ($Beds_fetch = mysqli_fetch_array($run_beds)) { ?>
                  <?php $tableb = 'beds' ?>
                  <a href="Productdetails.php?page=&id=<?= $Beds_fetch['id'] ?>&table=<?= $tableb ?>" class="a">

                     <div class="card ">
                        <!--Card Starting-->

                        <div class="product_Image"><?php echo '<img src="data:image;base64,' . base64_encode($Beds_fetch['Photo1']) . '" alt="" srcset=""  class="product_Image" >'; ?></div>

                        <table>
                           <tr>
                              <td>
                                 <div class="product-Details "><?php echo $Beds_fetch['Product_Type'] ?></div>
                                 <div class="model"><?php echo $Beds_fetch['Model_No'] ?><br></div>
                                 <div class="price">Rs.<?php echo $Beds_fetch['Price'] ?></div>
                              </td>

                              <td>

                                 <div class="buy-icon"><i class="fa-solid fa-cart-shopping"></i></div>

                              </td>
                           </tr>
                        </table>

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
                  <?php } ?>
                  </a>


            </div>
         </div>
         <script>
            const BDnextIcon = '<div class="next"><i class="fa-solid fa-arrow-right-long">  </i></div>';
            const BDprevIcon = '<div class="prev"><i class="fa-solid fa-arrow-left-long">  </i></div';



            $(".carousel").owlCarousel({
               margin: 10,
               loop: true,
               autoplay: true,
               autoplayTimeout: 2000,
               autoplayHoverPause: true,
               nav: true,
               navText: [
                  BDprevIcon,
                  BDnextIcon
               ],
               responsive: {
                  0: {
                     items: 1,

                  },
                  600: {
                     items: 2,

                  },
                  1000: {
                     items: 4,

                  }
               }
            });
         </script>





      </div>
      <!--==============================BEDS ROW END===================================================-->




      <br><br><br><br><br><br>




      <div class="row">
         <div id="Footer"></div>
      </div>
      <!--====FOOTER ROW======-->


   </div>
   <!--container end-->

</body>

</html>