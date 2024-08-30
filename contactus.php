<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 100vh; */
            margin: 0;
        }
        .contact-container {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            /* max-width: 400px; */
            width:100%;
            text-align: center;
        }
        .contact-container h2 {
            margin-bottom: 20px;
        }
        .contact-item {
            margin: 15px 0;
        }
        .contact-item a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }
        .contact-item a:hover {
            text-decoration: underline;
        }
        .contact-icon {
            margin-right: 8px;
        }
        .map{
            text-align:center;
            position: sticky;
            width:100%;
        }
        .body1 a{
            padding: 5px;
            font-size: 20px;
            display: inline;
            justify-content: space-around;
        }

    </style>
</head>
<body>
    <div class="contact-container" style="padding: 0">
    <?php include'nav.php';?>
        <div class="container mt-3">
            <h2>Contact Us</h2>
            <div class="body1">
                <B>Contact Us for buying idols</b> <br><br>
                <a href="tel:8218674904"><i class="fa-solid fa-phone"></i></a>
                <a href="https://wa.me/918218674904?text=Hello Sir!%0A"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="https://t.me/dkupraityhandicraft"><i class="fa-brands fa-telegram"></i></a>
                <a href="mailto:dkupraityhandicraft222@gmail.com?subject=Buying idols"><i class="fa-solid fa-envelope"></i></a>
            </div>
            <div class="map mt-3">
                <?php include'map1.php'; ?>
            </div><br><BR><BR><BR><br><BR><BR><BR><BR>
        </div>
    </div><br><BR><BR><BR><BR>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-wDc3l7V5RtEfJbNcK2eW1EIQx0jJJt4gqE2X+5g3OJfPU6bVV/DULW4rXeJ+NqDQ" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/02f4bd7d60.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-wDc3l7V5RtEfJbNcK2eW1EIQx0jJJt4gqE2X+5g3OJfPU6bVV/DULW4rXeJ+NqDQ" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/02f4bd7d60.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
    <script>
</body>
</html>