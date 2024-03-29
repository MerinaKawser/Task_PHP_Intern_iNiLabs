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
        <h4>All The Users List</h4>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Delete Data</th>
                    <th>Update Data</th>
                </tr>
            </thead>
            <?php 
                include("connection.php");
                /* Detele Data */
                @$id = $_GET['id'];
                $query_del = "DELETE FROM `user` WHERE `id`='$id'";
                $run_del = mysqli_query($con, $query_del);
                if($run_del){
                    //echo "Delete Data";
                }
                $query = "SELECT* FROM `user`";
                $run = mysqli_query($con, $query);
                $rows = mysqli_num_rows($run);
                if($rows>0){
                    while($data = mysqli_fetch_assoc($run)){
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $data['name'];?></td>
                                <td><?php echo $data['email'];?></td>
                                <td><a class="btn btn-danger" href="dataList.php?id=<?php echo $data['id'];?>" >Delete</a></td>
                                <td><a class="btn btn-success "href="update.php?id=<?php echo $data['id'];?>">Edit</a></td>
                            </tr>
                        </tbody>
                        <?php
                    }
                }
            ?>
        </table>
    </div>
    
</body>
</html>