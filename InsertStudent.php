<?php
    require 'my_conn.php';
    $sql = "INSERT INTO student(Name,DOB, MobileNumber, Email, CourseId,Session, Gender, Image, Roll)"
            . " VALUES ('$_POST[name]', '$_POST[dob]', '$_POST[mobile]','$_POST[email]', '$_POST[course]', '$_POST[session]',"
            . "'$_POST[gender]', '$_POST[pic]', '$_POST[roll]')";
    
    if ($conn->query($sql) === TRUE) {
        echo 'new record inserted';
        include_once 'AdminStudentAdd.php';
    } else {
        echo $sql;
        echo 'ERROR! '. $conn->error; 
        include_once 'AdminStudentAdd.php';
    }
    $conn->close();
?>