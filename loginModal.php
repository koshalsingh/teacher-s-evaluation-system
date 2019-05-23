<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 110px;">
            <div class="modal-dialog" role="document" style="width: 30%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="col-xs-11" style="margin-left:0%; padding-left: 135px">
                            <img src="Assets/images/user.png" alt="" height="100" width="100"/>
                        </div>
                        <div class="col-xs-1">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <h2 class="modal-title text-center" id="exampleModalLabel">Login</h2>
                    </div>
                    <form action="loginValidation.php" method="post">
                        <div class="modal-body">

                            <div class="form-group">
                                <input type="text" class="form-control" id="userId" placeholder="User Name">                                
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <input class="btn btn-primary form-control" type="submit" value="Login">
                        </div>
                    </form>
                </div>
            </div>
    </body>
</html>
