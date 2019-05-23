<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="Assets/js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="Assets/js/popper.min.js" type="text/javascript"></script>
        <link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="Assets/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="Assets/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="Assets/css/masterCSS.css" rel="stylesheet" type="text/css"/>
        <title>Student's Page</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12" style="border-bottom: 2px solid white;">
                    <?php
                    include_once 'header.php';
                    require_once 'my_conn.php';
                    ?>
                </div>

                <div class="col-xs-12">
                    <div class="row" style="font-family: Footlight MT;">
                        <div class="col-xs-9 text-center user h1" style="font-size: 2.9em"><b>Student</b></div>
                        <div class="col-xs-2 text-center user" style="font-size: 1.1em">
                            Name:-<b>koshal kumar<br> BSc.I.T</b> | Roll:-<b>49</b><br>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12" style="margin: 10px"><!--centre-->                    
                    <div class="col-xs-9" style="border: 2px solid skyblue; border-radius: 5px;  margin: 1% 0% 0% 1%; height: 450px">
                        <div class="row">
                            <form>
                                <div class="col-xs-offset-2 col-xs-8" style="margin-top: 20px">
                                    <select class="form-control input-lg text-center text-uppercase" id="dept">
                                        <option>List of Teachers</option>
                                        <?php
                                        $sql1 = "select * from faculty where DeptId=1";
                                        $dept = $conn->query($sql1);
                                        echo $sql1;
                                        if ($dept->num_rows > 0) {
                                            while ($rows = $dept->fetch_assoc()) {
                                                echo'<option value="' . $rows['Id'] . '">' . $rows['Name'] . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-xs-12">
                                    <fieldset>
                                        <legend>Evaluate</legend>
                                        <div class="row">
                                            <?php
                                            $sql = "select * from  question, questionType "
                                                    . "where question.QuestionTypeId=questiontype.Id"
                                                    . "and questiontype.Flag=1";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($rows = $result->fetch_assoc()) {
                                                    ?>
                                                    <div class="col-xs-12">
                                                        <div class="row questionbox">
                                                            <div class="col-xs-9">
                                                                <?php echo $rows['QuestionTitle'];?>
                                                            </div>
                                                            <div class="col-xs-3">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                            }
                                            ?>
                                            <div class="col-xs-12">
                                                <div class="row questionbox">
                                                    <div class="col-xs-9">

                                                    </div>
                                                    <div class="col-xs-3">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>

                            </form>
                        </div>
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
