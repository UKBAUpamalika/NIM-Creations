<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
/*
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $database = "nimcreations";

    $connection = new mysqli($server_name, $user_name, $password, $database);

    if ($connection->connect_error) {
        die("Connection Error");
    } else {
        echo "connection okay";
    }
    ?>

    <form action="database.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="img" id=""><br><br>
        <input type="text" name="helo" id=""> <br><br>
        <button type="submit" name="upload">Upload</button>
    </form>





    <?php
    // https://www.youtube.com/watch?v=5eLENJmouHg


    if (isset($_POST['upload'])) {
        /*
    $file_name =$_FILES ['img']['name'];
    $file_type = $_FILES['img']['type'];
    $tmp_name = $_FILES['img']['tmp_name'];
    $file_size = $_FILES['img']['size'];
    $upload_to = 'IMG/';

   move_uploaded_file($tmp_name, $upload_to . $file_name);
*/
/*
        $file = addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
        $username = $_POST['helo'];

        $insert = "INSERT INTO most_populer_slider_home (Productname, Price , Photo ) VALUES ('username', 100, '$file' )";
        $query_run =  mysqli_query($connection, $insert);


        if ($query_run) {
            echo "<script>alert('Image Uploaded Sucessfully')</script>";
            echo "
            

            
            ";
        } else {
            echo "Image NOT uploded!!!";
        }
    }


    ?>
<br><br><br>
    <table>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Image</th>
        </tr>
        
            <?php

            $fetch = "SELECT * FROM `most_populer_slider_home` ";
            $query_run2 = mysqli_query($connection, $fetch);

            while ($row = mysqli_fetch_array($query_run2)) {
            ?>

<tr>
            <td><?php echo  $row['Productname']; ?></td>
            <td><?php echo  $row['Price']; ?></td>
            <td><?php echo '<img src="data:image;base64, '.base64_encode($row['Photo']).'" alt="" srcset="" style = "width:20px; height:20px">';?></td>
            </tr>
<?php


//https://www.youtube.com/watch?v=GaTEOGwCz0c&list=PLq2EMZ95WwVIXRTP0yFPMrd08N-f3s6qZ
            }
            ?>
        </tr>


    </table>


</body>

</html>