<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>task_04</title>
</head>
<body>
    <div class="jumbotron text-center">
        <h4 class="container">
            **Task 4: Polymorphism**
            Build a set of animal classes that demonstrate polymorphism by overriding a method for making sounds.
        </h4>
    </div>
    <?php 
            class Animals{
                public $sound;
                function __construct($sound){
                    $this->sound = $sound;
                }
                function makeSound(){
                    return "Animal parent class: All Animals can make sound like: " . $this->sound;
                }
            }
            class Cat extends Animals{
                function catSound(){
                    return "Cat child class: Cat can make sound like: " . $this->sound;
                }
                function makeSound(){
                    return "Cat child class. Overriding the makeSound() of parent class: Cat can make sound like: " . $this->sound;
                }
            }
            class Dog extends Animals{
                function dogSound(){
                    return "Dog child class: Dog can make sound like: " . $this->sound;
                }
                function makeSound(){
                    return "Dog child class . Overriding the makeSound() of parent class: Dog can make sound like " . $this->sound;
                }
            }
            class Duck extends Animals{
                function duckSound(){
                    return "Duck child class: Duck can make sound like: " . $this->sound;
                }
                function makeSound(){
                    return "Duck child class. Overriding the makeSound() of parent class: Duck can make sound like: " . $this->sound;
                }
            }
            $Cat = new Cat("meow");
            $cat = $Cat->catSound();
            $cat_sound = $Cat->makeSound();

            $Dog = new Dog("bark");
            $dog = $Dog->dogSound();
            $dog_sound = $Dog->makeSound();

            $Duck = new Duck("quack");
            $duck = $Duck->duckSound();
            $duck_sound = $Duck->makeSound();
        ?>
    <div class="container text-center">
        <h4><?php echo $cat?></h4>
        <h4><?php echo $cat_sound?></h4>
        <br>
        <h4><?php echo $dog?></h4>
        <h4><?php echo $dog_sound?></h4>
        <br>
        <h4><?php echo $duck?></h4>
        <h4><?php echo $duck_sound?></h4>
    </div>
</body>
</html>