<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="Assets/js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <link href="Assets/css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css"/>
        <link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="Assets/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="Assets/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>   
        <link href="Assets/css/masterCSS.css" rel="stylesheet" type="text/css"/>
        <title>Admin</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12" style="border-bottom: 2px solid white;">
                    <?php
                    include_once 'header.php';
                    ?>
                </div>

                <div class="col-xs-12">
                    <div class="row" style="margin-left: 0px">
                        <div class="col-xs-3 text-center user" style="width: 300px; ">
                            Name:-<b>koshal kumar</b><br>EmpCode:-<b>3308</b>
                        </div>
                        <div class="col-xs-8 text-center user h1" style="font-family: Footlight MT;width: 920px;">
                            ADMIN
                        </div>
                        
                    </div>
                </div>
                <div class="col-xs-12" style="margin: 10px"><!--centre-->
                    <div class="col-xs-3" style="margin: 1% 0% 0% 0%;">
                        <?php
                        include_once 'AdminMenu.php';
                        ?>
                    </div>
                    <div class="col-xs-6" style="border: 2px solid skyblue; border-radius: 5px;  margin: 1% 0% 0% 1%; height: 450px">

                    </div>
                    <div class="col-xs-2" style="border: 2px solid darkblue; border-radius: 5px; margin: 1% 0% 0% 3%; height: 450px">
                        <h3 class="text-center">Notice</h3><hr>
                    </div>
                </div>

                <div class="col-xs-12">
                    <?php
                    include_once 'footer.php';
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>