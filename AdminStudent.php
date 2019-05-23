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
        <link href="Assets/css/AdminCSS.css" rel="stylesheet" type="text/css"/>
        <title>Admin Student</title>
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
                    <div class="col-xs-3" style="margin-top: 1%;">
                        <?php
                        include_once 'AdminMenu.php';
                        ?>
                    </div>

                    <div class="col-xs-8 borders" style="margin-top: 1%; height: 450px; overflow-y: scroll;">
                        <div class="row">
                            <form>
                                <div class="col-xs-3">
                                    <div class="row">
                                        <div class="form-group mx-sm-3 mb-2" style="text-align: center">
                                            <label for="name" class="sr-only">NAME</label>
                                            <input type="text" class="form-control" id="name" placeholder="Name" style="display: inline-block">
                                        </div>
                                        <div class="form-group mx-sm-3 mb-2" style="text-align: center">
                                            <label for="roll" class="sr-only">ROLL</label>
                                            <input type="number" class="form-control" id="roll" placeholder="ROLL" style="display: inline-block">
                                        </div>
                                        <div class="col-xs-12 asmenu" style="text-align: center">
                                            <button class="btn  glyphicon glyphicon-search btn-info btn-block" style="display: inline-block">Search</button>                                             
                                        </div>
                                        <div class="col-xs-12 asmenu" style="text-align: center">
                                            <button class="btn btn-success btn-block" style="display: inline-block"><a href="AdminStudentAdd.php">Add</a></button>
                                        </div>
                                        <div class="col-xs-12 asmenu" style="text-align: center">
                                            <button class="btn btn-success  btn-block" style="display: inline-block">Update</button>
                                        </div>
                                        <div class="col-xs-12 asmenu" style="text-align: center">
                                            <button class="btn btn-success  btn-block" style="display: inline-block"><a href="AdminStudentDelete.php">Delete</a></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-9">
                                    <?php
                                    require 'my_conn.php';
                                    ?>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <select class="form-control" id="dept">
                                                        <option value="*">Department</option>
                                                        <?php
                                                        $sql1 = "select * from department order by Id";
                                                        $dept = $conn->query($sql1);
                                                        #echo $dept;
                                                        if ($dept->num_rows > 0) {
                                                            while ($rows = $dept->fetch_assoc()) {
                                                                echo'<option value="' . $rows['Id'] . '">' . $rows['DeptName'] . '</option>';
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-xs-4">
                                                    <select class="form-control" id="course">
                                                        <option title="">Course</option>
                                                        <?php
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
                                                <div class="col-xs-4">
                                                    <select class="form-control" id="session">
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
                                        </div>

                                        <div class="col-xs-12">
                                            <table class="table table-hover">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Department</th>
                                                        <th scope="col">Course</th>
                                                        <th scope="col">session</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $sql4 = "select * from student order by CourseId";
                                                    $result = $conn->query($sql4);
                                                    $i = 0;
                                                    if ($result->num_rows > 0) {
                                                        while ($r = $result->fetch_assoc()) {
                                                            $i = $i + 1;
                                                            $crssql = 'select * from Course where Id =' . $r['CourseId'];
                                                            $crs = $conn->query($crssql);
                                                            $crsresult = $crs->fetch_assoc();
                                                            $deptsql = 'select * from department where Id=' . $crsresult['DeptId'];
                                                            $dept = $conn->query($deptsql);
                                                            $deptresult = $dept->fetch_assoc();
                                                            echo'<tr>
                                                        <th scope="row">' . $r['Id'] . '</th>
                                                        <td><a href="AdminStudentDetails.php?id='.$r['Id'].'">' . $r['Name'] . '</a></td>
                                                        <td>' . $deptresult['DeptName'] . '</td>
                                                        <td>' . $crsresult['CourseName'] . '</td>
                                                        <td>' . $r['Session'] . '</td>
                                                        </tr>';
                                                        }
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <?php include_once 'footer.php'; ?>
                </div>
            </div>
        </div>
    </body>
</html>