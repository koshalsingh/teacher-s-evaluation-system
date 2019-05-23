<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        <title>Gaya College</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 bottomBorder" style="border-bottom: 2px solid;">
                    <div class="row">
                        <div class="col-xs-2 pull-left">
                            <img src="Assets/images/tes logo.png" alt="GYG logo" class="center-block" style="width: 130px;"/>
                        </div>

                        <div class="col-xs-8 pull-left">
                            <div style="font-family: Footlight MT; margin-top: -10px; margin-bottom:-10px; color: whitesmoke"><h1>Teacher's Evaluation System</h1></div>
                            <div class="h4" style="font-family: Franklin Gothlic;color: skyblue">We evaluate for <b>FUTURE</b></div>                            
                        </div>

                        <div class="col-xs-2 pull-right">
                            <div class="row">
                                <div class="col-xs-12" style="margin-top: 5%; margin-left: 50%; font-size: 1.3em">

                                    <a data-toggle="modal" href="#login" class="link ">Login</a>
                                </div>
                                <div class="col-xs-12" style="margin-top: 5%; margin-left: 20%; font-size: 1.3em">
                                    <a href="AdminMaster.php" class="link " > Admin</a>
                                    <a href="StudentMaster.php" class="link " > Student</a>
                                </div>
                                <div class="col-xs-12 view overlay" style="margin-left: 20%">
                                    <a href="#"><img src="Assets/images/Facebook.jpeg" alt="fb" class="img-circle" style="height: 30px; width: 30px;"/></a>
                                    <a href="#"><img src="Assets/images/Twitter.jpeg" alt="twitter" class="img-circle" style="height: 30px; width: 30px;"/></a>
                                    <a href="#"><img src="Assets/images/Google plus.jpeg" alt="G+" class="img-circle" style="height: 30px; width: 30px;"/></a>
                                    <a href="#"><img src="Assets/images/WhatsApp.jpeg" alt="whatsApp" class="img-circle" style="height: 30px; width: 30px;"/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12" style="margin: 10px"><!--centre-->

                    <div class="col-xs-9" style="border: 2px solid skyblue;  ;border-radius: 5px;  margin: 1% 0% 0% 1.5%; height: 400px">
                        <?php
                        include_once 'home.php';
                        ?>
                    </div>
                    <div class="col-xs-2" style="border: 2px solid darkblue; border-radius: 5px; margin: 1% 0% 0% 4%; height: 400px">
                        <h3 class="text-center">Notice</h3><hr>
                    </div>
                </div>

                <div class="col-xs-12">
                    <?php
                    include_once 'footer.php';
                    include_once 'loginModal.php';
                    ?>
                </div>              
            </div>
        </div>
    </body>
</html>
