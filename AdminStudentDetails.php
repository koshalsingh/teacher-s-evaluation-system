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
                            Student Detail
                        </div>

                    </div>
                </div>
                <div class="col-xs-12" style="margin: 10px"><!--centre-->
                    <div class="col-xs-3" style="margin: 1% 0% 0% 0%;">
                        <?php
                        include_once 'AdminMenu.php';
                        ?>
                    </div>
                    <div class="col-xs-8" style="border: 2px solid skyblue; border-radius: 5px;  margin: 1% 0% 0% 1%; height: 450px">
                        <form method="post" id="AddStudent" class="form-horizontal">
                            <div class="row">
                                <br>
                                <?php
                                require 'my_conn.php';
                                $id = $_GET['id'];
                                $sql = "select * from student where id = $id";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($rows = $result->fetch_assoc()) {
                                        $crs="select * from course where id=".$rows['CourseId'];
                                        $course = $conn->query($crs);
                                        $row = $course->fetch_assoc();
                                        ?>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-12 form-group">
                                                            <div class="row">
                                                                <div class="col-md-4 text-right" style="margin-top: 15px">
                                                                    <label>CANDIDATE NAME:-</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" id="name" name="name" class="input-lg form-control" value="<?php echo $rows['Name'] ?>" readonly="">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12 form-group">
                                                            <div class="row">
                                                                <div class="col-md-4 text-right" style="margin-top: 15px">
                                                                    <label>EMAIL:-</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" id="email" name="email" class="input-lg form-control" value="<?php echo $rows['Email'] ?>" readonly="">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12 form-group">
                                                            <div class="row">
                                                                <div class="col-md-4 text-right" style="margin-top: 15px">
                                                                    <label>ROLL NO. :</label>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input type="text" id="roll" name="roll" class="input-lg" value="<?php echo $rows['Roll'] ?>" readonly="">
                                                                </div>
                                                            </div>
                                                        </div>                                                                                                            

                                                        <div class="col-md-12 form-group">
                                                            <div class="row">
                                                                <div class="col-md-4 text-right" style="margin-top: 15px">
                                                                    <label>DOB:</label>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input type="text" id="dob" name="dob" class="input-lg" value="<?php echo $rows['DOB'] ?>"  readonly="">
                                                                </div>
                                                                <div class="col-md-3 form-group">
                                                                    <div class="row">
                                                                        <div class="col-xs-12" style="margin:5px 50px">
                                                                                <input type="text" name="gender" id="gender" class="input-lg" value="<?php echo $rows['Gender']?>" readonly=""/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12 form-group">
                                                            <div class="row">
                                                                <div class="col-md-4 text-right" style="margin-top: 15px">
                                                                    <label>MOBILE NO.:</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" id="mobile" name="mobile" class="input-lg"style="width: 200px"  value="<?php echo $rows['MobileNumber']?>" readonly="">
                                                                </div>
                                                            </div>
                                                        </div>                                    

                                                        <div class="col-md-12 form-group">
                                                            <div class="col-md-offset-4 col-md-4">                                        
                                                                <input type="text" id="course" name="course" class="input-lg" style="width: 200px" value="<?php echo $row['CourseName']?>" readonly="">
                                                            </div>
                                                            <div class="col-md-4">                                        
                                                                <input type="text" id="session" name="session" class="input-lg" style="width: 200px" value="<?php echo $rows['Session']?>" readonly="">
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3"> 
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="imag">
                                                        <img src="" alt="student" id="imag" height="200" width="200"/> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </form>
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