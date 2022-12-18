<!DOCTYPE html>
<html lang="en">
<?php
require 'Admin Panel/DB_Connection.php'; // Add the Database connection into the page
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="CSS/login.css">

    <a href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"></a>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="fontawesome\css\all.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/ext-core/3.1.0/ext-core.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <div class="loginBox"> <img class="user" src="Images\logo.jpg" height="70px" width="70px">
        <h3>Register here</h3>
        <form action="#" method="post">
            <div class="inputBox">
                <input id="uname" type="text" name="Name" placeholder="Name" required />
                <input id="uname" type="text" name="Email" id="Email" placeholder="Email" required />

                <script>/*
                    var mail = document.getElementById("Email").value;
                    ValidateEmail(mail);
                    function ValidateEmail(mail) {
                        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value)) {
                            return (true)
                        }
                        alert("You have entered an invalid email address!")
                        return (false)
                    }*/
                </script>
                <input id="uname" type="text" name="Phone" placeholder="Phone Number" required />
                <input id="pass" type="password" name="Password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                <input id="cpass" type="password" name="ConfirmPassword" placeholder="Re-enter Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />

            </div>
            <input type="submit" name="register" value="Register">
        </form>
        <div class="text-center">
            <div style="color: #f4a83a;"><a href="login.php">Log in</a> </div>
        </div>
        <!--  <div class="icon">
            <div style="color: rgba(32, 32, 32, 0.539); margin-top: 10px;">Register with: </div>
            <ul>
                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
            </ul>

        </div> -->

    </div>

</body>

<?php

if (isset($_POST['register'])) {

    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $password = $_POST['Password'];
    $ConfirmPassword = $_POST['ConfirmPassword'];

    $verification_code = sha1($email . time());
    $verification_URL = 'http://localhost/NIM%20CREATIONS%20-%20Copy/verify.php?code=' . $verification_code;

    $email_availavle_check = "SELECT * FROM useraccount WHERE Email = '$email'";

    $RUN_email = mysqli_query($connection, $email_availavle_check);
    $num = mysqli_num_rows($RUN_email);
    if ($num === 0) {


        if ($password === $ConfirmPassword) {

            $inset_reg = "INSERT INTO useraccount_verify(Email,Phone,Name,Password,Verification_code,Status) VALUES ('$email','$phone', '$name', '$password','$verification_code', false)";
            $Run_inset_reg = mysqli_query($connection, $inset_reg);
            if ($Run_inset_reg === True) {



                $to = $email;
                $sender = 'chathu9935@gmail.com';
                $mail_subject = 'LETS GET STARTED WITH NIM CREATIONS';
                $email_body = '<b> Dear ' . $name . '</b>';
                $email_body .= '<p> Thank you for signing up. Click below link to verify your email address.</p>';
                $email_body .= '<p>' . $verification_URL . '</p>';
                $email_body .= '<p> Thank you! <br><b>NIM Creations</b></p>';

                $header = "FROM: {$sender}\r\nContent-Type: text/html;";

                $send_mail_result = mail($to, $mail_subject, $email_body, $header);

                if ($send_mail_result) {
                    /* echo "
            <script> Swal.fire(
                'Check Your Email to Verify !!',
                '',
                'success'
              )</script>
            ";*/
                    echo "<script>
                    let timerInterval
Swal.fire({
  title: 'Verify Your Account!',
  html: 'Please Check your Email <b></b> We have sent a verification Code.',
  timer: 100000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
    timerInterval = setInterval(() => {
      b.textContent = Swal.getTimerLeft()
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
})
</script>    
                    
                    ";
                } else {
                    echo "
        <script>

        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
            
          })
          </script>
          ";
                }
            } else {
                echo "
        <script>

        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
            
          })
          </script>
          ";
            }
        } else {
            echo "
            <script>
    
            Swal.fire({
                icon: 'error',
                title: 'PASSWORD NOT MATCHING',
                text: 'Something went wrong!',
                
              })
              </script>
              ";
        }
    } else {
       
        echo "
        <script>

        Swal.fire({
            icon: 'error',
            title: 'THIS EMAIL ALREADY HAS AN ACCOUNT',
            text: 'Something went wrong!',
            
          })
          </script>
          ";
    }







    /*
    if ($password === $ConfirmPassword) {

        $inset_reg = "INSERT INTO useraccount(Email,Phone,Name,Password,Verification_code,Status) VALUES ('$email','$phone', '$name', '$password','$verification_code', false)";
        $Run_inset_reg = mysqli_query($connection, $inset_reg);
        if ($Run_inset_reg === True) {



            $to = $email;
            $sender = 'chathu9935@gmail.com';
            $mail_subject = 'LETS GET STARTED WITH NIM CREATIONS';
            $email_body = '<b> Dear ' . $name . '</b>';
            $email_body .= '<p> Thank you for signing up. Click below link to verify your email address.</p>';
            $email_body .= '<p>' . $verification_URL . '</p>';
            $email_body .= '<p> Thank you! <br><b>NIM Creations</b></p>';

            $header = "FROM: {$sender}\r\nContent-Type: text/html;";

            $send_mail_result = mail($to, $mail_subject, $email_body, $header);

            if ($send_mail_result) {
                echo "
            <script> Swal.fire(
                'Check Your Email to Verify !!',
                '',
                'success'
              )</script>
            ";
            } else {
                echo "
        <script>

        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
            
          })
          </script>
          ";
            }
        } else {
            echo "
        <script>

        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
            
          })
          </script>
          ";
        }
    } else {
        echo "
            <script>
    
            Swal.fire({
                icon: 'error',
                title: 'PASSWORD NOT MATCHING',
                text: 'Something went wrong!',
                
              })
              </script>
              ";
    }



    //echo $name . "    " . $email . "    " . $password . "     " . $ConfirmPassword;

}*/
}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script type="text/javascript">



</script>


</html>