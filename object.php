<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Fruit{
        public $name ;
        public $color ;

        function get_fruit_name(){
            return $this->name;

        }
        function set_fruit_name($name){
              $this->name = $name;
        }
        function get_fruit_color(){
            return $this->color;
        }
        function set_fruit_color($x){
            $this->color = $x;
        }

    }
    $apple = new Fruit();
    $mango = new Fruit();
    $banana = new Fruit();
    $orange = new Fruit();
    $papaya = new Fruit();

    $apple->set_fruit_name("Apple");
    $apple->set_fruit_color("White");

    $mango->set_fruit_name("Mango");
    $mango->set_fruit_color("Yellow");

    $banana->set_fruit_name("Banana");
    $banana->set_fruit_color("Yellow");

    $orange->set_fruit_name("Orange");
    $orange->set_fruit_color("Orange");

    $papaya->set_fruit_name("Papaya");
    $papaya->set_fruit_color("Green");

    echo $apple->get_fruit_name();
    echo"<br>";
    echo $apple->get_fruit_color();
    echo"<br>";
    echo $mango->get_fruit_name();
    echo"<br>";
    echo $mango->get_fruit_color();
    echo"<br>";
    echo $banana->get_fruit_name();
    echo"<br>";
    echo $banana->get_fruit_color();
    echo"<br>";
    echo $orange->get_fruit_name();
    echo"<br>";
    echo $orange->get_fruit_color();
    echo"<br>";
    echo $papaya->get_fruit_name();
    echo"<br>";
    echo $papaya->get_fruit_color();


    ?>
</body>
</html>