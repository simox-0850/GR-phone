<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="packeges/bootstrap.min.css">
        <link rel="stylesheet" href="packeges/jquery.js" >
        <link rel="stylesheet" type="text/css" href="packeges/waiting.css" >
    </head>
    <body>
        <div class="navigation">
        <a href="https://imgbb.com/"><img src="https://i.ibb.co/NYMh0sz/LOGO.gif" class="LOGO" ></a>
            <div>
        
            </div>
        </div>
        
        <div class="container-fluid topSpase" >
            <div class="row justify-content-around flex-xl-nowrap d-flex justify-content-center">
                <div class="col-8">
                    <p class="tt"><b>DATE </b><?php
                        $DMY = date('d/m/Y');
                        $H = date('h');
                        $M = date('i');
                        $S = date('s');
                        echo " ".$DMY. "  ". $H.':'.$M.":".$S;
                        ?></p>
                    <p class="tt">Please follow the instagram page to see the winner of the draw on 05/27/2024</p>
                    <p class="tt">You will be transferred to the page shortly</p>
                    <div class="FLOATRegiht">
                    
                    </div>
                    
                    
                    <img class="IMGWait" src="packeges/ok.gif" />
                </div>
                </div>
            </div>
        </div>
        
        <script src="packeges/jquery.js"></script>
        <script src="packeges/bootstrap.min.js"></script>
        <script>
            var delay = 20000; // time in milliseconds
            setTimeout(function(){
                window.location = "https://www.instagram.com/p/C6dPbSxtMiG/?igsh=MWNzMHU5cTh6MjE2aQ==";
            },delay);

        </script>
    </body>
</html>