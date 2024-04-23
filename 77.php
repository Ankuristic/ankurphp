<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop</title>
</head>
<body>

<h1> this is  oops tutorial </h1>
<h2> what is ooops </h2>
<p> oops is about creating classes and objects . classes serves as a template and multiple object objects cab be created using a  class</p>
<h2> what are classes and objects</h2>
<p>classes are template  for creating object</p>
<p> if car is a class then maruti suzki  alto  and maaruti swift are two objects </p>
    <h2> why oops</h2>
    <p> oops make it easy  to keep the code dry?</p>
    <p> DRY - do not repeat your self the code written by programmer is resuable </p>
    
</body>
</html>


<?php
class Player {
    public $name;
    public $speed =5;

}

// Methods

function set_name($name){
    $this->name = $name;

}


function get_name() {
    return $this-> name;
}




echo"Lets understand oopss using gta vice city"
$player1 = new Player();
$player1 -> set_name("harry");
echo $playe1 -> get_name();



?>
