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
    <div class="jumbotron text-center">
        <h4>Update Details here</h4>
    </div>
    <?php 
        include("connection.php");
        @$id = $_GET['id'];
        $sql = "SELECT* FROM `user` WHERE `id`='$id'";
        $run_sql = mysqli_query($con, $sql);
        $rows = mysqli_num_rows($run_sql);
        if($rows>0){
            while($data=mysqli_fetch_assoc($run_sql)){
                $name = $data['name'];
                $email = $data['email'];
            }
        }
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $query = "UPDATE `user` SET `name` = '$name', `email`='$email' WHERE `id`='$id'";
            $run = mysqli_query($con, $query);
            if($run){
                $update = "<h5 style='color:green;'>Your Information is Updated</h5>";
            }
            else{
                $update = "<h5 style='color:red;'>Your Informatin Not Updated.</h5>";
            }
        }
    
    ?>
    <div class="container">
        <form action="update.php?id=<?php echo $id;?>" method="post">
            <?php echo @$update;?>
            <label>Name:</label>
            <input type="text" name="name" value=<?php echo @$name;?> >
            <br><br>

            <label>Email:</label>
            <input type="email" name="email" value=<?php echo @$email;?>>
            <br><br>

            <input type="submit" name="submit" value="Update"/>
            <button href="dataList.php">See List</button>
        </form>
    </div>

    
</body>
</html>