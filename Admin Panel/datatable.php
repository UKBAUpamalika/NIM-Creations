<?php
require 'DB_Connection.php'; // Add the Database connection into the page
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
</head>

<body>

    <!-- Code By Webdevtrick ( https://webdevtrick.com ) -->
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Resizable Table Columns | Webdevtrick.com</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <h2>My Customers</h2>

        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
        <br><br><br>
        <div class="table-wrapper-scroll-y my-custom-scrollbar">
            <table id="myTable" class="TABLE">

                <thead>
                    <tr class="thd TR">
                        <th class="TH" data-type="text-short"><span class="resize-handle"></span></th>
                        <th class="TH" data-type="numeric">Database id <span class="resize-handle"></span></th>
                        <th class="TH" data-type="text-short">Product_Type<span class="resize-handle"></span></th>
                        <th class="TH" data-type="text-short">Model_No<span class="resize-handle"></span></th>
                        <th class="TH" data-type="numeric">Price <span class="resize-handle"></span></th>
                        <th class="TH" data-type="text-long">Description <span class="resize-handle"></span></th>
                        <th class="TH" data-type="text-short">Metirial <span class="resize-handle"></span></th>
                        <th class="TH" data-type="text-long">Photo 1 <span class="resize-handle"></span></th>
                        <th class="TH" data-type="text-long">Photo 2 <span class="resize-handle"></span></th>
                        <th class="TH" data-type="text-long">Photo 3 <span class="resize-handle"></span></th>
                        <th class="TH" data-type="text-long">Photo 4 <span class="resize-handle"></span></th>
                        <th class="TH" data-type="text-long">Photo 5 <span class="resize-handle"></span></th>


                    </tr>
                </thead>
                <?php

                $view = "SELECT * FROM sofa";
                $query_run2 = mysqli_query($connection, $view);
                while ($row = mysqli_fetch_array($query_run2)) { ?>

                    <tr class="TR">
                        <form action="" method="get">

                            <?php $id = $row['id']; ?>
                            <?php echo "<input type='hidden' name='n' value= '$id' >"; ?>
                            <td class="TD"><button name="delete" class="delete"><i class="fas fa-trash"></i></button></td>
                            <td class="TD"><?php echo  $row['id']; ?></td>
                            <td class="TD"><?php echo  $row['Product_Type']; ?></td>
                            <td class="TD"><?php echo  $row['Model_No']; ?></td>
                            <td class="TD"><?php echo  $row['Price']; ?></td>
                            <td class="TD" style="height: 100px; overflow-y: scroll;">
                                <?php echo  $row['Desc']; ?>
                            </td>
                            <td class="TD"><?php echo  $row['Metirial']; ?></td>

                            <td class="TD">
                                <?php echo '<img src="data:image;base64,' . base64_encode($row['Photo1']) . '" alt="" srcset="" width=100 height=50>'; ?> </td>
                            <td class="TD">
                                <?php echo '<img src="data:image;base64,' . base64_encode($row['Photo2']) . '" alt="" srcset="" width=100 height=50>'; ?> </td>
                            <td class="TD">
                                <?php echo '<img src="data:image;base64,' . base64_encode($row['Photo3']) . '" alt="" srcset="" width=100 height=50>'; ?> </td>
                            <td class="TD" >
                                <?php echo '<img src="data:image;base64,' . base64_encode($row['Photo4']) . '" alt="" srcset="" width=100 height=50>'; ?> </td>
                            <td class="TD">
                                <?php echo '<img src="data:image;base64,' . base64_encode($row['Photo5']) . '" alt="" srcset="" width=100 height=50>'; ?> </td>


                        </form>
                    </tr>
                <?php } ?>

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
                    td = tr[i].getElementsByTagName("td")[1];
                    td1 = tr[i].getElementsByTagName("td")[2];
                    td2 = tr[i].getElementsByTagName("td")[3];
                    td3 = tr[i].getElementsByTagName("td")[4];
                    td4 = tr[i].getElementsByTagName("td")[5];
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
        <script src="function.js"></script>

    </body>

    </html>

</body>

</html>