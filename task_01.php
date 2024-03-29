<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>task_01</title>
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
            $width = $_POST['width'];
            $height = $_POST['height'];
            $radius = $_POST['radius'];

            class setValues{
                public $r_area, $width, $height, $c_area, $radius;
                function __construct($width, $height, $radius){
                    $this->width = $width;
                    $this->height = $height;
                    $this->radius = $radius;
                }
            }
            class getArea extends setValues{
                function rectangle(){
                    $this->r_area = $this->width * $this->height;
                    return $this->r_area;
                }
                function circle(){
                    $this->c_area = 3.1415 * (pow($this->radius,2));
                    return $this->c_area;
                }
            }
            $area = new getArea($width, $height, $radius);
            $rectangle = "<h4 style='color: green;'> Rectangle area is " . $area->rectangle() . "</h4>";
            $circle = "<h4 style='color: green;'> Circle area is " . $area->circle() . "</h4>";
        }
        
    ?>
    <div class="container">
        <form action="task_01.php" method="post">
            <label>Rectangle:</label>
            <br>
            <input type="number" name="width" placeholder="Enter a width"/>
            <br><br>
            <input type="number" name="height" placeholder="Enter a height"/>
            <br>
            <?php echo @$rectangle; ?>
            <br>
            <label>Circle:</label>
            <br>
            <input type="number" name="radius" placeholder="Enter a radius"/>
            <br>
            <?php echo @$circle; ?>
            <br><br>

            <input type="submit" name="submit" value="Enter"/>
        </form>
    </div>
</body>
</html>