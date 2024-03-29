<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>task_05</title>
</head>
<body>
<?php 
        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "crud_test";
        $con = mysqli_connect($host, $user, $password, $db);
        if(!$con){
            die("Not Connected");
        }
        else{
            //echo "connected";
        }
    ?>
    
        
    
</body>
</html>