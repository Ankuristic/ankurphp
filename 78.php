<?php

class Employee {
    //properties

    public $name;
    public $salay;
    // class Methods of our class 
    // constructor - it allows you to intialize objects. it is code which
    // is execued whenever a new object is instaniated .
    function __construct() {
        echo "this is my constrctor for employee"
    }
// constructor wirhout arguments
// function __construct(){
    //
//}
// constructor with arguments
function __construct($name, $salary) {
    $this-->name = $name;
    $this->salary = $salary;


}

}

$rohan = new Employee("Harry", 54000);
$harry = new Employee("ankur",95000);
$skillF = new Employee("bok","78690");
// use of constructor







?>