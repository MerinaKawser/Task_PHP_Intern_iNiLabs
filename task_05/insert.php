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
            include("connection.php");
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                
                if(empty($name) || empty($email)){
                    $error =  "<h5 style='color: red;'>Please fill out the form</h5>";
                }
                else{
                    $query = "INSERT INTO `user`(`name`, `email`)
                                VALUE('$name', '$email')";
                    $sql = mysqli_query($con, $query);
                    if($sql){
                        $msg = "<h5 style='color:green;'>Inserted Data</h5>";
                    }
                    else{
                        $msg = "<h5 style='color:red;'>Not Inserted Data</h5>";
                    }
                }
            }
    ?>  
    <div class="jumbotron text-center">
        <h4>Please! fill up the form</h4>
    </div>
    <div class="container">
        <form action="insert.php" method="post">
            <?php echo @$msg; ?>
            <?php echo @$error;?>
            <label>Name:</label>
            <input type="text" name="name"/>
            <br><br>

            <label>Email:</label>
            <input type="email" name="email"/>
            <br><br>

            <input type="submit" name="submit" value="SAVE"/>
            <button href="dataList.php">See List</button>
            
        </form>
    </div>
</body>
</html>