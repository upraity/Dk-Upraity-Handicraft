<?php
include'nav.php';
    include 'con.php';
    $search = $_GET['search'];
    $sql = "SELECT * FROM items WHERE item_name LIKE '%" . $search . "%'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if(mysqli_num_rows($result) > 0){
            echo'
                <!doctype html>
                <html lang="en">
                    <head>
                        <title>Search product -  '.$search.'</title>
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                        <style>
                            table {
                                // width:98%;
                                border-collapse: collapse;
                                animation: fadeIn 2s ease; 
                                }

                            th, td {
                                border: 1px solid black;
                                // padding: 5px;
                                text-align: center;
                            }

                            th {
                                background-color: #f2f2f2;
                            }

                            tr:nth-child(odd) {
                                background-color: #f2f2f2;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="contain mt-5"  style="padding:5px;">
                            <h3>Search Product: <em style="color:grey">"'.$search.'"</em></h3>
                            <div class="contain mt-3">
                                <table class="tabl mt-5" border="2">
                                    <tr>
                                        <th scope="col">Sno</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Product Size</th>
                                        <th scope="col">Product Rate</th>
                                        <th scope="col">Product Image</th>
                                    </tr>
            ';
            $sno = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                        <tr onclick="location.href=\'https://dkupraityhandicraft.000.pe/item.php?sno='.$row['sno'].'\'"style="cursor: pointer;">
                                <td>'.$sno++.'</td>
                                <td>'.$row['item_name'].'</td>
                                <td>'.$row['item_size'].'</td>
                                <td>'.$row['item_rate'].'</td>
                                <td><center><img src="https://dkupraityhandicraft.000.pe/upload/uploads/'.$row['item_img_1'].'" width=100px height=100px></center></td>
                        </tr>
                ';
            }
        }
        else {
            echo "<h2>No results found...</h2>";
        }
    }
?>
                            
                                </table>
                            </div>
                        </div><br><BR><BR><BR><br><BR><BR><BR><BR>
                    </body>
                    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
                </html>

