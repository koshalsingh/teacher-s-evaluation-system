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
        <?php
            
            $host="localhost";
            $usr="root";
            $pwd="";
            $dbname="tes";
            
            $conn=mysqli_connect($host,$usr,$pwd,$dbname) or 
                    die ("unable to connect to with server !");
            
            if($conn===true){
                echo 'connection established';
            }
				
        ?>
    </body>
</html>
