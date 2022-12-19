
    <?php

$server_name = "localhost";
$user_name = "root";
$password = "";
$database = "nimcreations";

$connection = new mysqli($server_name, $user_name, $password, $database);

if ($connection->connect_error) {
    die("Connection Error");
} else {

    //echo "<script>alert('Connection Okay Lets Go to the Admin Panel')</script>";
}
?>


<?php

                    if (isset($_POST["Upload1"]) &&  ini_set('display_errors', 'Off')) {


                        $file = addslashes(file_get_contents($_FILES["Image"]["tmp_name"]));

                        if (empty($file)) {
                            echo '<div class="alert alert-danger" role="alert">Please Enter The Image First !!!</div>';
                        } else {

                            $insert = "INSERT INTO Main_Carousel (Photo ) VALUES ( '$file' )";
                            $query_run =  mysqli_query($connection, $insert);


                            if ($query_run) {
                                echo"<script language='javascript'>alert(4+2)</script>";
                               
                                
                            } else {
                                echo "Image NOT uploded!!!";
                            }
                        }
                        header("Location:Admin.php");
                    }



                    ?>