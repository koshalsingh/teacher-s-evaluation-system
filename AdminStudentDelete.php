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
        <link href="Assets/css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css"/>
        <link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="Assets/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="Assets/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>   
        <link href="Assets/css/masterCSS.css" rel="stylesheet" type="text/css"/>
        <link href="Assets/css/AdminCSS.css" rel="stylesheet" type="text/css"/>
        <title>Delete Student</title>
    </head>
    <body>
        <div class="container-fluid">
            <?php
            require 'my_conn.php';
            ?>
            <div class="row">
                <div class="col-xs-12 bottomBorder">
                    <?php
                    include_once 'header.php';
                    ?>
                </div>
                <div class="col-xs-3" style="margin-top: 1%;">
                    <?php
                    include_once 'AdminMenu.php';
                    ?>
                </div>
                <div class="col-xs-9 borders" style="overflow-y: scroll; margin-top: 1%; height: 450px">
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
                            $i = 201;
                            if ($result->num_rows > 0) {
                                while ($r = $result->fetch_assoc()) {
                                    $crssql = 'select * from Course where Id =' . $r['CourseId'];
                                    $crs = $conn->query($crssql);
                                    $crsresult = $crs->fetch_assoc();
                                    $deptsql = 'select * from department where Id=' . $crsresult['DeptId'];
                                    $dept = $conn->query($deptsql);
                                    $deptresult = $dept->fetch_assoc();
                                    echo'<tr>
                                                        <th scope="row">' . $r['Id'] . '</th>
                                                        <td><a href="Deletestudent.php?id='.$i.'">' . $r['Name'] . '</a></td>
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
                <div class="col-xs-12">
                    <?php include_once 'footer.php'; ?>
                </div>
            </div>
        </div>
    </body>
</html>
