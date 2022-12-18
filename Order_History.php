<?php
require 'Admin Panel/DB_Connection.php'; // Add the Database connection into the page

session_start();
?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>Order History</title>
   <link rel="stylesheet" href="CSS\Furniture.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">


   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <!-- JavaScript Bundle with Popper -->
   <link rel="stylesheet" href="fontawesome\css\all.css">

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="Javascript/productadd.js"></script>
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
   <link rel="stylesheet" href="CSS/Oder.css">


   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



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


   <link rel="stylesheet" href="CSS\searchtable.css">
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

   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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


      <div class="row">
         <!--============================== START===============================================-->

         <div class="row">
            <div class="col-12">

    <!--

               <i class="fas fa-search"></i>
               <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Oders.." title="Type in a name">
               -->

               
               <br><br><br>
               <h4>
                  <center>Order History</center>
                  </h2>
                  <div class="table-wrapper-scroll-y my-custom-scrollbar">

                     <table id="myTable" class="TABLE table table-hover">

                        <thead>
                           <tr class="thd TR">

                              <th class="TH" data-type="numeric">Order Id <span class="resize-handle"></span></th>
                              <th class="TH" data-type="text-short">Product Name<span class="resize-handle"></span></th>
                              <th class="TH" data-type="numeric">Date and Time <span class="resize-handle"></span></th>
                              <th class="TH" data-type="text-short">Price <span class="resize-handle"></span></th>
                              <th class="TH" data-type="text-short">Order Status <span class="resize-handle"></span></th>
                              <th class="TH" data-type="text-short"> <span class="resize-handle"></span></th>


                           </tr>
                        </thead>
                        <?php
                        if (isset($_SESSION['Userid']) && isset($_SESSION['Email'])) {
                           $email = $_SESSION['Email'];
                           $view = "           SELECT *
                                            FROM useraccount , order_history 
                                            WHERE useraccount.userid =order_history.Userid
                                            AND
                                            useraccount.Email = '$email'
                                            ORDER BY Date_time  DESC
                                            ";
                        } else {
                           echo '
                       <script>
                       alert("Please log in first ");
                       window.location = "login.php";
                       </script>
                       ';
                        }



                        $query_run2 = mysqli_query($connection, $view);
                        while ($row = mysqli_fetch_array($query_run2)) { ?>

                           <tr class="TR">
                              <form action="" method="get">

                                 <?php $id = $row['Orderid']; ?>
                               
                                
                                 <?php echo "<input type='hidden' name='n' value= '$id' >"; ?>
                                 <td data-label="Oder Id" class="TD"><?php echo  $row['Orderid']; ?></td>
                                 <td data-label="Product Name" class="TD">

                                    <a class="A" href="Productdetails.php?page=&id=<?php echo $row['Productid']; ?>&table=<?php echo  $row['Product_table_name']; ?>"><?php echo  $row['Model_number']; ?></a><br>

                                 </td>
                                 <td data-label="Date and Time" class="TD"><?php echo  $row['Date_time']; ?></td>
                                 <td data-label="Price" class="TD">Rs <?php echo  $row['Price']; ?>.00</td>
                                 <td data-label="Order Status" class="TD">
                                   
                                 <?php 
                                 $status =  $row['Order_Status']; 
                                 if ($status==1){
                                    echo '<div style="color:blue">Ordered</div>';
                                 }
                                 else{
                                    echo '<div style="color:red">Cancelled</div>';
                                 }
                                 
                                 
                                
                                 
                                 
                                 
                                 ?>
                               
                              
                              
                              
                              </td>
                                 <td class="TD">
                                    <button type="submit" name="cancel_order" class="btn btn-danger btn-sm">Cancel Order</button>
                                 </td>

                                 <style>
                                    .btn {
                                       font-size: 11px !important;
                                    }
                                 </style>

                              </form>
                           </tr>

                        <?php } ?>

                        <?php
                        if (isset($_GET['n'])) {

                            $_SESSION['Orderid_for_cancel'] = $_GET['n'];
                            echo "
                              <script>
                              Swal.fire({
                                 title: 'Are you sure to cancel this order?',
                                 text: 'You wont be able to revert this!',
                                 icon: 'warning',
                                 showCancelButton: true,
                                 confirmButtonColor: '#3085d6',
                                 cancelButtonColor: '#d33',
                                 confirmButtonText: 'Yes, Cancel it'
                               }).then((result) => {
                                 if (result.isConfirmed) {
                                    
                                   Swal.fire(
                                    
                                     'Cancel Request was Sent',
                                     'Our admins will contact you soon',
                                     'success'
                                   ).then(function() {
                                    window.location = 'cancelorder.php';
                                });
                                 }
                               })
                              
                    
                              </script>
                              ";
                        
                        }



                        



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
         <!--================================== END===================================================-->




         <br><br><br><br><br><br>

         <div class="row">
            <div style="margin-top: 200px;">

            </div>
         </div>


         <div class="row">
            <div id="Footer"></div>
         </div>
         <!--====FOOTER ROW======-->


      </div>
      <!--container end-->

</body>

</html>