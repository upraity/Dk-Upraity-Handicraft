<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dk Upraity Handicraft - Items Uploads</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <style>
        form {
            margin: 20px;
        }
        form label {
            width: 15%;
        }
        table {
            margin: 5px;
        }
    </style>
</head>
<body>

<?php
    error_reporting(0);
    $showPopup = true;
    $correctPassword = "RamSita7@";

    if(isset($_GET['password'])){
        $enteredPassword = $_GET['password'];

        if($enteredPassword == $correctPassword){
            $showPopup = false;
        }
    }

    if($showPopup){
        echo'
            <div class="container mt-5">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Important Message</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">To access this page, please enter the password:</p>
                        <form action="#" method="GET">
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="Check">Check</button>
                        </form>
                    </div>
                </div>
            </div>
        ';
    } 
    else{
        include '../nav.php';
        echo'
                <form action="#" method="POST">
                    <label>Product Name: </label><input type="text" name="item_name" required><br>
                    <label>Product Size : </label><input type="text" name="item_size" required><br>
                    <label>Product Rate : </label><input type="text" name="item_rate"><br>
                    <label>Product Desc: </label><input type="text" name="item_desc" required><br>
                    <label>Product More Desc: </label><input type="text" name="item_more_desc" required><br>
                    <label>Product Img1: </label><input type="file" name="item_img_1" required><br>
                    <label>Product Img2: </label><input type="file" name="item_img_2"><br>
                    <label>Product Img3: </label><input type="file" name="item_img_3"><br>
                    <label>Product Img4: </label><input type="file" name="item_img_4"><br>
                    <input type="submit" name="submit">
                </form>

                <table class="table table-bordered mt-3">
                    <thead class="thead-dark">
                        <tr>
                            <th>sno</th>
                            <th>item_name</th>
                            <th>item_size</th>
                            <th>item_rate</th>
                            <th>item_desc</th>
                            <th>item_more_desc</th>
                            <th>item_img_1</th>
                            <th>item_img_2</th>
                            <th>item_img_3</th>
                            <th>item_img_4</th>
                        </tr>
                    </thead>
                    <tbody>
        ';

        $conn = mysqli_connect('');

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $item_name = $_POST['item_name'];
            $item_size = $_POST['item_size'];
            $item_rate = $_POST['item_rate'];
            $item_desc = $_POST['item_desc'];
            $item_more_desc = $_POST['item_more_desc'];
            $item_img_1 = $_POST['item_img_1'];
            $item_img_2 = $_POST['item_img_2'];
            $item_img_3 = $_POST['item_img_3'];
            $item_img_4 = $_POST['item_img_4'];

            $ram = "INSERT INTO items (item_name, item_size, item_rate, item_desc, item_more_desc, item_img_1, item_img_2, item_img_3, item_img_4) VALUES('$item_name', '$item_size', '$item_rate', '$item_desc', '$item_more_desc', '$item_img_1', '$item_img_2', '$item_img_3', '$item_img_4')";
            $r = mysqli_query($conn, $ram);
            if($result){
                echo'<script>alert("Upload Successfuly...");';
            }
        }


        
        $query = "SELECT * FROM items";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo '<tr>';
                echo '<td>'. $row['sno'] .'</td>';
                echo '<td>'. $row['item_name'] .'</td>';
                echo '<td>'. $row['item_size'] .'</td>';
                echo '<td>'. $row['item_rate'] .'</td>';
                echo '<td>'. $row['item_desc'] .'</td>';
                echo '<td>'. $row['item_more_desc'] .'</td>';
                echo '<td>';
                if (!empty($row['item_img_1'])) {
                    echo '<img src="https://dkupraityhandicraft.000.pe/upload/uploads/' . $row['item_img_1'] . '" height="100px" width="100px">';
                } 
                else {
                    echo ''; // or echo '<img src="default_image_url" height="100px" width="100px">'; if you have a default image
                }
                echo '</td>';
                echo '<td>';
                if (!empty($row['item_img_2'])) {
                    echo '<img src="https://dkupraityhandicraft.000.pe/upload/uploads/' . $row['item_img_2'] . '" height="100px" width="100px">';
                } 
                else {
                    echo ''; // or echo '<img src="default_image_url" height="100px" width="100px">'; if you have a default image
                }
                echo '</td>';
                echo '<td>';
                if (!empty($row['item_img_3'])) {
                    echo '<img src="https://dkupraityhandicraft.000.pe/upload/uploads/' . $row['item_img_3'] . '" height="100px" width="100px">';
                } 
                else {
                    echo ''; // or echo '<img src="default_image_url" height="100px" width="100px">'; if you have a default image
                }
                echo '</td>';
                echo '<td>';
                if (!empty($row['item_img_4'])) {
                    echo '<img src="https://dkupraityhandicraft.000.pe/upload/uploads/' . $row['item_img_4'] . '" height="100px" width="100px">';
                } 
                else {
                    echo ''; // or echo '<img src="default_image_url" height="100px" width="100px">'; if you have a default image
                }
                echo '</td>';
                echo '</tr>';
                        }
                    }
            echo'
                 </tbody>
            </table>
        ';
    }
?>
<br><BR><BR><BR>
</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>

</html>
