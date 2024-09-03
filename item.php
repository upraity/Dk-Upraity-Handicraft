<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Dk Upraity Handicraft - items_details</title>
    <style>

        table {
      width: 100%;
      border-collapse: collapse;
      animation: fadeIn 2s ease; /* Apply the animation to the table */
    }

    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: center;
    }

    /* td {
      background-color: #f2f2f2;
    }*/

    tr:nth-child(odd) {
      background-color: #f2f2f2;
    } 

.container {
            margin-top: 50px;
        }
        .content {
            display: flex;
            align-items: center;
        }
        .content img {
            margin-right: 15px;
        }
        .Details {
            margin-top: -280px;
            margin-left: -350px;
            font-size:100%;
        }
        .item-images {
        }

        .item-images img {
            height:45%;
            width:50%;
            border: 1px solid lightgrey;
        }
        .content1{
            margin:5%;
        }
        

@media screen and (max-width: 768px) {
    .card-img, .card-img-bottom, .card-img-top {
    -ms-flex-negative: 0;
    flex-shrink: 0;
    width: 150px;
}
    .content {
        flex-direction: column;
        align-items: flex-start;
    }

    .content img {
        margin-bottom: 15px; 
    }

    .Details {
        margin-left: 0; 
        margin-top: 15px; 
    }

    .item-images img {
        max-width: 100%;
        height:100%;
        width:98%;
        border: 1px solid lightgrey;
    }

    .col-md-4{
        max-width:20%;
    }
}

    .image-container {
        display: flex;
    }

    .img {
        margin: 2px;
            border: 1px solid lightgrey;
    }
    .modal-body a{
        padding:5px;
        font-size:20px;
        display: inline;
        justify-content:space-around;
    }
    .modal-body label{
        width:20%;
    }
    .items-image{
        justify-content:space-around;
    }
    .content1{
        margin:5%;
    }
    .col-md-4 {
        max-width: 20%; 
    }
@media (min-width: 768px) {
    .col-md-4 {
       
        max-width: 20%; 
    }
    
    
}

@media (max-width: 767px) {
    .col-md-4 {
        max-width: 40%; 
    }
    
}

@media (max-width: 480px) {
    .col-md-4 {
        max-width: 100%; 
    }
    
}
    .footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        height: 8%;
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        padding:2px;
    }
    .footer a {
        color: #fff;
        text-decoration: none;
    }
    .footer a:hover {
        text-decoration: underline;
    }
    .map{
        text-align:center;
        position: sticky;
        width:100%;
    }
    .td{
        font-weight:bold;
    }

    </style>
</head>
<body>

    <?php
    error_reporting(0);
    include 'nav.php';
    include 'con.php';
    $sno =  $_GET['sno'];
    $sql = "SELECT * FROM items WHERE sno = '$sno' ";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $sno = $row['sno'];
            $item_name = $row['item_name'];
            $item_size = $row['item_size'];
            $item_rate = $row['item_rate'];
            $item_desc = $row['item_desc'];
            $item_img_1 = $row['item_img_1'];
            $item_img_2 = $row['item_img_2'];  
            $item_img_3 = $row['item_img_3'];
            $item_img_4 = $row['item_img_4'];  

            echo '
                <div class="modal fade" id="cModal" tabindex="-1" role="dialog" aria-labelledby="cModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="cModalLabel">Contact - Dk Upraity Handicraft</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <B>Contact Us for buying idols</b> <br><br>
                                <a href="tel:8218674904"><i class="fa-solid fa-phone"></i></a>
                                <a href="https://wa.me/918218674904?text=Hello Sir!%0AWe have to buy these product%0A*Name:* '.$item_name.'%0A*Size:* '.$item_size.'%0A*Link:* https://dkupraityhandicraft.000.pe/item.php?sno='.$sno.'"><i class="fa-brands fa-whatsapp"></i></a>
                               <a href="https://t.me/dkupraityhandicraft?text=Hello Sir!%0AWe have to buy these product%0AName: '.$item_name.'%0ASize:'. $item_size.'%0ALink: https://dkupraityhandicraft.000.pe/item.php?sno='.$sno.'"><i class="fa-brands fa-telegram"></i>
</a>
                                <a href="mailto:dkupraityhandicraft222@gmail.com?subject=Buying idols &body=Buying '.$item_name.' '.$item_size.' https://dkupraityhandicraft.000.pe/item.php?sno='.$sno.'"><i class="fa-solid fa-envelope"></i></a>

                                <!--<b><label>Email: </label></b> <a href="mailto:dkupraityhandicraft222@gmail.com"><i class="fa-solid fa-envelope"></i></a><br>
                                <b><label>Telegram:  </label></b> <a href="https://t.me/dkupraityhandicraft"><i class="fa-brands fa-telegram"></i></a></br>
                                <b><label>Whatsapp:  </label></b> <a href="https://wa.me/918218674904"><i class="fa-brands fa-whatsapp"></i></a><br>
                                <b><label>Mobile no.:</label></b> <a href="tel:8218674904"><i class="fa-solid fa-phone"></i></a><br>-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="content">
                        <div class="item-images">
                            <img id="main-image" class="img" src="https://dkupraityhandicraft.000.pe/upload/uploads/'.$item_img_1.'">
                        </div>
                        <div class="Details">
                            <p>
                                <b>Product Name: </b>'.$item_name.'<br>
                                <b>Size: </b>'.$item_size.'<br>';
                                if(!empty($row['item_rate'])){
                                    echo '<b>Price: </b>'.$item_rate.'₹<br>';
                                }
                                echo'<b>Description: </b>'.$item_desc.'<br><br>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#cModal">Buy Now</button>
                            </p>
                        </div>
                    </div>
                    <div class="image-container">';
                        if(!empty($item_img_1)){
                            echo '<img class="img" src="https://dkupraityhandicraft.000.pe/upload/uploads/'.$item_img_1.'" height="85px" width="85px">';
                        }
                        else{
                            echo"";
                        }
                        if(!empty($item_img_2)){
                            echo'<img class="img" src="https://dkupraityhandicraft.000.pe/upload/uploads/'.$item_img_2.'" height="85px" width="85px">';
                        }
                        else{
                            echo"";
                        }
                        if(!empty($item_img_3)){
                            echo'<img class="img" src="https://dkupraityhandicraft.000.pe/upload/uploads/'.$item_img_3.'" height="85px" width="85px">';
                        }
                        else{
                            echo"";
                        }
                        if(!empty($item_img_4)){
                            echo '<img class="img" src="https://dkupraityhandicraft.000.pe/upload/uploads/'.$item_img_4.'" height="85px" width="85px">';
                        }
                        else{
                            echo"";
                        }
                    echo'
                    </div>
                </div>
                <div class="content1">
                    <h3>More Description</h3>
                    <table border="2">
                        <tr><td class="td">Product Name</td><td>'.$row['item_name'].'</td></tr>
                        <tr><td class="td">Product Size</td><td>'.$row['item_size'].'</td></tr>';
                        if(!empty($row['item_rate'])){
                        echo'</td></tr>
                            <tr><td class="td">Product Rate</td><td>'.$row['item_rate'].'</td></tr>';
                        }
                        echo'<tr><td class="td">Product Desc</td><td>'.$row['item_desc'].'</td></tr>
                        <tr><td class="td">More Desc</td><td>'.$row['item_more_desc'].'</td></tr>
                    </table>
                    <p></p>
                </div>
                    <div class="content1">
                        <h3>Related Products</h3>
                        <div class="flex" style="display:flex; overflow:auto; max-width: 100%;">
            ';

            $words = explode(" ", $item_name);
            $all_items = [];

            foreach ($words as $word) {
                $sql = "SELECT * FROM items WHERE item_name LIKE '%" . $conn->real_escape_string($word) . "%'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) { 
                    while ($row = $result->fetch_assoc()) {
                        $all_items[$row['sno']] = $row;
                    }
                }
            }

            $unique_items = [];
            foreach ($all_items as $item) {
                if (!isset($unique_items[$item['sno']])) {
                    $unique_items[$item['sno']] = $item;
                }
            }

            foreach ($unique_items as $sno => $item) {
                $n = $item['item_name'];
                $s = $item['item_size'];
                $i = $item['item_img_1'];

                echo '
                    
                    <div class="col-md-4 mt-3">
                        <a href="https://dkupraityhandicraft.000.pe/item.php?sno='.$sno.'" style="text-decoration:none; color:black;">
                            <div class="card" style="display: flex;  width: 100%; max-width: 300px;">
                                <img src="https://dkupraityhandicraft.000.pe/upload/uploads/'. $i.'" class="card-img-top" alt="">
                                <div class="card-body" >
                                    <p class="card-text"><b>Name: </b>'. substr($n, 0, 15).'...<br><b>Size: </b>'.$s.'</p>
                                </div>
                            </div>
                        </a>
                    </div>

                ';
            }
        }
    }
    ?>
    </div>
    </div>
    <div class="content1">
        <h3>More Products</h3>
        <div class="flex" style="display:flex; overflow:auto; max-width: 100%;">
    <?php
    $sq = "SELECT * FROM items";
    $re = mysqli_query($conn, $sq);

    $items_array = array();
    while ($row = mysqli_fetch_assoc($re)) {
        $items_array[] = array(
            'sno' => $row['sno'],
            'item_img_1' => $row['item_img_1'],
            'item_size' => $row['item_size'],
            'item_name' => $row['item_name']
        );
    }

    shuffle($items_array);

    foreach ($items_array as $item) {
        $sno = $item['sno'];
        $i   = $item['item_img_1'];
        $s   = $item['item_size'];
        $n   = $item['item_name'];

        echo '
            <div class="col-md-4 mt-3">
                <a href="https://dkupraityhandicraft.000.pe/item.php?sno=' . $sno . '" style="text-decoration:none; color:black;">
                    <div class="card" style="display: flex;  width: 100%; max-width: 300px;">
                        <img src="https://dkupraityhandicraft.000.pe/upload/uploads/' . $i . '" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="card-text"><b>Name: </b>' . substr($n, 0, 15) . '...<br><b>Size: </b>' . $s . '</p>
                        </div>
                    </div>
                </a>
            </div>
        ';
    }
?>

    </div>
    </div>
    <div class="map mt-3">
        <?php include'map1.php';?>
    </div>
    <br><BR><BR><BR>
    <div class="footer1">
        <footer class="footer">
            <p><b>&copy; 2024</b> Dk Upraity Handicraft. All Rights Reserved.<br> Designed by <b><a href="https://dj.000.pe/portfolio">Dj Upraity</a></b></p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-wDc3l7V5RtEfJbNcK2eW1EIQx0jJJt4gqE2X+5g3OJfPU6bVV/DULW4rXeJ+NqDQ" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/02f4bd7d60.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
    <script>
        var thumbnails = document.querySelectorAll('.image-container img');
        var mainImage = document.getElementById('main-image');
        thumbnails.forEach(function(thumbnail) {
            thumbnail.addEventListener('click', function() {
                mainImage.src = this.src;
            });
        });
    </script>
</body>
</html>
