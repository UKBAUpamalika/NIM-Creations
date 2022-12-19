<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<?php
require 'DB_Connection.php'; // Add the Database connection into the page
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="CSS/login.css">

    <link rel="shortcut icon" type="x-icon" href="Images/logo.jpg">

    <a href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"></a>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="fontawesome\css\all.css">
    
   
    
    
    
  
    
</head>


<body>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <div class="loginBox"> <img class="user" src="Wrapper.jpg" height="70px" width="70px">
        <h3>ADMIN DASHBOARD</h3>
        <form action="#" method="post">
            <div class="inputBox"> <input id="uname" type="text" name="Email" placeholder="Email" required />
                <input id="pass" type="password" name="Password" placeholder="Password" required />
            </div>
            <input type="submit" name="login" value="Login">
        </form>
      

<!--
        <div class="icon">
            <div style="color: rgba(32, 32, 32, 0.539); margin-top: 10px;">Log in with : </div>
            <ul>
                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
            </ul>

        </div>
-->
<br><br><br><br>
    </div>
    <?php
    if (isset($_POST['login'])) {
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $Adminemail = "admin@nimcreations.com";
        $Adminpassword = "NIM@077sLC22";
       
                if ($Adminemail == $Email &&  $Adminpassword == $Password) {
                    $_SESSION['Email'] = $Email;
                    $_SESSION['Password'] = $Password;
                   
                    //header("Location:index.php");
                    header("Location:Admin.php");
                    //header("Location:.index.php");
                   
                } else {
                    echo "
                <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Your password is not matched',
                    
                  })
                </script>
                ";
                    exit();
                }
            } 
        


    ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>