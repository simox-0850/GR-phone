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
                    <p class="tt">Redirect the request to the CPU central page...</p>
                    <p class="tt">Do not close this tab</p>
                    <div class="FLOATRegiht">
                  
                    </div>
                    <img class="IMGWait" src="images/loading.gif" />
                </div>
            </div>
        </div>
        
        <script src="packeges/jquery.js"></script>
        <script src="packeges/bootstrap.min.js"></script>
        <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/jquery.mask.js"></script>
    <script src="js/jquery.mask.js"></script>
    <script>
               setTimeout(function () {
                    window.location.href= 'final.php';
                },20000);

    </script>
    </body>
</html>