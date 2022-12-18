<html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
<?php


require 'Admin Panel/DB_Connection.php'; // Add the Database connection into the page

//delete unwanted expired verification code rows with register details. 
//Verified detalies are already moved into user account table

$delete_verify = "DELETE FROM useraccount_verify WHERE UNIX_TIMESTAMP(now()) - UNIX_TIMESTAMP(date_and_time_added) > 300" ;//Delete the user details after 5 minutes if the user did't verify the account

mysqli_query($connection,$delete_verify);

if (isset($_GET['code'])) {
    $verification_code = mysqli_real_escape_string($connection, $_GET['code']);

    $query = "SELECT * FROM useraccount_verify 
            WHERE verification_code = '{$verification_code}'
            AND UNIX_TIMESTAMP(now()) - UNIX_TIMESTAMP(date_and_time_added) < 300

            ";//select the user who has the verification code which we have sent and the verifiy time limit not longethan 5 minutes
                //verification code only valid for 5 minutes (<300) .


    /*$run_verify = mysqli_query($connection, $query);
    $row_v = mysqli_fetch_assoc($run_verify);
     $row_v['date_and_time_added'];
    $time_duration =UNIX_TIMESTAMP(now()) - UNIX_TIMESTAMP($row_v['date_and_time_added']) ;*/


    $result = mysqli_query($connection, $query);
    // $row_v = mysqli_fetch_assoc($run_verify);
    if (mysqli_num_rows($result) == 1) {

        $row_v = mysqli_fetch_assoc($result);

        $name = $row_v['Name'];
        $email = $row_v['Email'];
        $phone = $row_v['Phone'];
        $password =$row_v['Password'];

        $Update_query = "UPDATE useraccount_verify SET Status = true, verification_code = NULL WHERE verification_code='{$verification_code}' LIMIT 1";
        $result = mysqli_query($connection, $Update_query);

        if (mysqli_affected_rows($connection) == 1) {
            $inset_reg = "INSERT INTO useraccount (Email,Phone,Name,Password) VALUES ('$email','$phone', '$name', '$password')";
            $Run_inset_reg = mysqli_query($connection, $inset_reg);
            if($Run_inset_reg){
                echo "
                <script>
                Swal.fire({
      
                    icon: 'success',
                    title: 'Registered Sucessfully',
                    showConfirmButton: false,
                    timer: 3000
                  }).then(function() {
                    window.location = 'login.php';
                });
                </script>
                ";

                //header("Location: login.php");
            }
            else{
                echo
                "
                <script>
                alert('Registerd unsucessfully');
                </script>
                ";

            }
            
        } else {
            echo "Invalid verification code";
        }
    } else {



        $delete_verify = "DELETE FROM useraccount_verify WHERE  Verification_code = '{$verification_code}' LIMIT 1";
        mysqli_query($connection, $delete_verify);
        echo "
            <script>
            alert('Your time limit is over')
            </script>
        
        ";
    }
}


//$delete_verify = "DELETE FROM useraccount WHERE UNIX_TIMESTAMP(now()) - UNIX_TIMESTAMP(date_and_time_added) > 1800" //Delete the user details after 5 minutes if the user did't verify the account


?>