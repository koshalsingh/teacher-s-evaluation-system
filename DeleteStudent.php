<?php
    require 'my_conn.php';
    
    $sql = "delete from student where Id = '$_GET[id]'";
    
    if ($conn->query($sql) === TRUE) {
        echo 'record deleted';
        echo $sql;
        include_once 'AdminStudentDelete.php';
    } else {
        echo $sql;
        echo 'ERROR! '. $conn->error; 
        echo $sql;
        include_once 'AdminStudentDelete.php';
    }
    $conn->close();
?>