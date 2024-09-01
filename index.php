<?php
include 'nav.php';
include 'con.php';
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Dk Upraity Handicraft</title>
        <style>
        </style>
    </head>
    <body>
        <div class="container">
            <div class="mt-4" style=" width:100px">
                <select id="languageSelector" class="form-control">
                    <option value="en">English</option>
                    <option value="hi">Hindi</option>
                    <!-- Add more languages as needed -->
                </select>
            </div>
            <div class="content mt-2" style="display:flex;">
                <div class="pic">
                    <img src="1.png" width="100px" height="100px">
                </div>
                <div class="desc ml-3" id="desc">
                    <p><b>Welcome to our business,</b><br>
                    where divinity meets craftsmanship. We specialize in creating exquisite idols of deities from every Hindu tradition. Our collection includes idols of <b>Ganesha, Lakshmi, Shiva, Parvati, Saraswati, Hanuman, Radha, Krishna, Durga Maa, Vishnu Lakshmi, Riddhi Siddhi Ganesha and much more.</b> These idols are available in white and coloured  variations, catering to different aesthetic preferences.<br> We take pride in taking custom orders for all kinds of idols in various sizes <b>(measured in inches)</b>, ensuring that each piece meets your specific needs and devotion.<br>Additionally, <b>we create personalized idols based on your specifications or photographs, ensuring that your imagination</b> is brought to life with utmost care and precision.</p>
                </div>
            </div>
            <center>
                <div class="row mt-4">
                    <?php
                        $sql = "SELECT * FROM `items` ";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            $sno = $row['sno'];
                            $item_name =  $row['item_name'];
                            $item_size = $row['item_size'];
                            $item_desc = $row['item_desc'];
                            $item_img_1 = $row['item_img_1'];
                            echo '
                                <div class="col-md-4 mt-3">
                                    <div class="card" style="width: 18rem;">
                                        <img src="https://dkupraityhandicraft.000.pe/upload/uploads/'.$item_img_1.'" class="card-img-top">
                                        <div class="card-body" style="text-align:left">
                                            <h5 class="card-title">Name: '.$item_name.'</a></h5>
                                            <p class="card-text">Size: '.$item_size.'</p>
                                            <p class="card-text">Description: '.substr($item_desc, 0, 100).'...</p>
                                            <a href="item.php?sno='.$sno.'" class="btn btn-primary">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            ';
                        }
                    ?>
                </div>
            </center><br><BR><BR><BR>
        </div>
    </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-wDc3l7V5RtEfJbNcK2eW1EIQx0jJJt4gqE2X+5g3OJfPU6bVV/DULW4rXeJ+NqDQ" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/02f4bd7d60.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
<script>
    const translations = {
        en: {
            welcome: "Welcome to our business,",
            description: "where divinity meets craftsmanship. We specialize in creating exquisite idols of deities from every Hindu tradition. Our collection includes idols of <b>Ganesha, Lakshmi, Shiva, Parvati, Saraswati, Hanuman, Radha, Krishna, Durga Maa, Vishnu Lakshmi, Riddhi Siddhi Ganesha and much more.</b> These idols are available in white and coloured variations, catering to different aesthetic preferences.<br> We take pride in taking custom orders for all kinds of idols in various sizes <b>(measured in inches),</b> ensuring that each piece meets your specific needs and devotion.<br> Additionally, <b>we create personalized idols based on your specifications or photographs,</b> ensuring that your imagination is brought to life with utmost care and precision."
        },
        hi: {
            welcome: "हमारे व्यवसाय में आपका स्वागत है,",
            description: "जहाँ दिव्यता शिल्प कौशल से मिलती है। हम हर हिंदू परंपरा से देवताओं की उत्कृष्ट मूर्तियाँ बनाने में माहिर हैं। हमारे संग्रह में <b>गणेश, लक्ष्मी, शिव, पार्वती, सरस्वती, हनुमान, राधा, कृष्ण, दुर्गा माँ, विष्णु लक्ष्मी, ऋद्धि सिद्धि गणेश और बहुत तरह की मूर्तियाँ शामिल हैं।</b> ये मूर्तियाँ सफ़ेद, रंगीन और रंगहीन विविधताओं में उपलब्ध हैं, जो विभिन्न सौंदर्य संबंधी प्राथमिकताओं को पूरा करती हैं। <br>हम विभिन्न आकारों <b>(इंच में मापे गए)</b> में सभी प्रकार की मूर्तियों के लिए कस्टम ऑर्डर लेने में गर्व महसूस करते हैं, यह सुनिश्चित करते हुए कि प्रत्येक टुकड़ा आपकी विशिष्ट आवश्यकताओं और भक्ति को पूरा करता है।<br> इसके अतिरिक्त, <b>हम आपकी विशिष्टताओं या तस्वीरों के आधार पर व्यक्तिगत मूर्तियाँ बनाते हैं,</b> यह सुनिश्चित करते हुए कि आपकी कल्पना को अत्यंत सावधानी और सटीकता के साथ जीवंत किया जाए।"
        }
        // Add more translations as needed
    };

    document.getElementById('languageSelector').addEventListener('change', function() {
        const selectedLanguage = this.value;
        document.getElementById('desc').innerHTML = `<p><b>${translations[selectedLanguage].welcome}</b><br>${translations[selectedLanguage].description}</p>`;
    });
</script>
