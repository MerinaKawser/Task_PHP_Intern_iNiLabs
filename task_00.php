<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>task_00</title>
</head>
<body>
    <div class="jumbotron text-center">
        <h4 class="container">
            **Task 1: Class Inheritance**
            Create classes to represent geometric shapes, including circles and rectangles. Implement methods for area calculation. You can use the provided example code as a reference.
        </h4>
    </div>
    <?php 
        if(isset($_POST['submit'])){
            $parenthesis = $_POST['parenthesis'];
            if($parenthesis == "(){}[]"){
                echo "Matched";
            }
            else{
                echo "Not matched";
            }
        }
        
    ?>
    <div class="container">
        <form action="task_00.php" method="post">
            <label>Parenthesis:</label>
            <br>
            <input type="text" name="parenthesis" placeholder="Enter a parenthesis"/>
            <br><br>
            <input type="submit" name="submit" value="Enter"/>
        </form>
    </div>
</body>
</html>