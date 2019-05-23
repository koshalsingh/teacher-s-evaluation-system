<!DOCTYPE html>
<head>
    <title>PRE-ADMISSION</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="Assets/js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <link href="Assets/css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css"/>
    <link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="Assets/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="Assets/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>   
    <link href="Assets/css/masterCSS.css" rel="stylesheet" type="text/css"/>
    <style>
        label{
            font-size: 1.3em;
            font-weight: bolder;
        }
        .loginBox{
            height: 80%;
        }
    </style>
    <script>
        $('.gender').click(function () {
            $(this).find('.btn').toggleClass('active');
            if ($(this).find('.btn-primary').length > 0) {
                $(this).find('.btn').toggleClass('btn-primary');
            }
            $(this).find('.btn').toggleClass('btn-default');
        });
    </script>
</head>
<body>
    <div class="container-fluid">        
        <div>
            <?php include_once 'header.php' ?>
        </div>
        <div class="panel panel-danger">
            <?php
            ?>
        </div>
        <div class="box">
            <form action="recordInsertion.php" method="post" id="AddStudent" class="form-horizontal">
                <div class="row">
                    <br><br>
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
                                                <input type="text" id="name" name="name" class="input-lg form-control" placeholder="Name" required>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12 form-group">
                                        <div class="row">
                                            <div class="col-md-4 text-right" style="margin-top: 15px">
                                                <label>EMAIL:-</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" id="email" name="email" class="input-lg form-control" placeholder="EMAIL" required>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12 form-group">
                                        <div class="row">
                                            <div class="col-md-4 text-right" style="margin-top: 15px">
                                                <label>ROLL NO. :</label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="number" id="roll" name="roll" class="input-lg" placeholder="Roll." required>
                                            </div>
                                        </div>
                                    </div>                                                                                                            

                                    <div class="col-md-12 form-group">
                                        <div class="row">
                                            <div class="col-md-4 text-right" style="margin-top: 15px">
                                                <label>DOB:</label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="date" id="dob" name="dob" class="input-lg" style="width: 200px" required>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <div class="row">
                                                    <div class="btn-group btn-group-toggle btn-info" style="margin:5px 50px" data-toggle="buttons">
                                                        <label class="btn active">
                                                            <input type="radio" name="gender" id="option2" class="input-lg" value="MALE" checked> MALE
                                                        </label>
                                                        <label class="btn">
                                                            <input type="radio" name="gender" id="option3" class="input-lg" value="FEMALE"> FEMALE
                                                        </label>
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
                                                <input type="text" id="mobile" name="mobile" class="input-lg" placeholder="Mobile no." style="width: 200px" required>
                                            </div>
                                        </div>
                                    </div>                                    

                                    <div class="col-md-12 form-group">
                                        <div class="col-md-offset-4 col-md-4">                                        
                                            <select class="input-lg form-control" id="course" name="course" required>
                                                <option title="">Course</option>
                                                <?php
                                                require 'my_conn.php';
                                                $sql2 = "select * from course order by Id";
                                                $course = $conn->query($sql2);
                                                if ($course->num_rows > 0) {
                                                    while ($rows = $course->fetch_assoc()) {
                                                        echo'<option value="' . $rows['Id'] . '">' . $rows['CourseName'] . '</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4">                                        
                                            <select class="input-lg text-center form-control" id="session" name="session" required>
                                                <option title="">Session</option>
                                                <?php
                                                $sql3 = "select distinct(Session) from student order by Session";
                                                $session = $conn->query($sql3);
                                                if ($session->num_rows > 0) {
                                                    while ($rows = $session->fetch_assoc()) {
                                                        echo'<option value="' . $rows['Session'] . '">' . $rows['Session'] . '</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div> 
                                    </div>
                                    
                                    <div class="col-md-12 left">
                                        <div class="row form-group">
                                            <div class="col-md-offset-6 col-md-6">
                                                <input type="submit" class="btn btn-success btn-lg" value="SUBMIT" style="width:150px;">
                                            </div>
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
                            <div class="col-lg-12">
                                <input type="file" onchange="showImage();" style="width: 80%; padding-left: 40px; padding-top: 10px;" id="pic" name="pic" accept="image/*" required>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div>
            <?php
            include_once 'footer.php';
            ?>
        </div>
    </div>
</body>
</html>