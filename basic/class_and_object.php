<?php

// what is object?

// an instance of a class


// so, what is class?

// class is a car, and 

// so, what is properties?

// variables can be called as properties

// what is method?

// method can be called as also function.


// Assume, Car is a class

// what is public?

// Access modifier  --- Public , Protected, Private

// variable ---> properties
// function ---> method

// $carArray = [
//     1 => ['name' => 'Toyota Axios'],
//     2 => ['name' => 'Toyota Corolla'],
//     3 => ['name' => 'Toyota Premio'],
// ];


// var_dump($carArray[1]['name']);exit;


// file name == snake_case // for all file name ?? NO
// camelCase --> variable / method / function -- preferrable
// snake_case --> variable / method / function
// PascalCase ---> class name
// kebab-case

// class homo_sapiens {} // no

class HomoSapiens
{
    //
}

class Human
{
    // properties

    // method
}

// () --> first bracket / parenthesis
// {} --> second bracket / curly braces
// [] --> third bracket // bracket

$john = new Human();


var_dump($john);exit;


// class is a blueprint
class Car
{
    public $name = 'marcedes benz';

    public function checkFuelAvailable()
    {
        return 'fuel is available';
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}


// bti --> 1360 sft / 1780 sft // 2400 sft -- gulshan -- 50 (20 + 15 + 15)
// bti --> 960 sft / 1480 sft // 1700 sft -- mirpur


$car1 = new Car(); // what is $car1 --> variable, but it is also an object.
$car1->setName('Toyota Axios');
// $car1->brandName = 'Toyota';

var_dump($car1);exit;
echo "Car 1: ";
var_dump($car1->getName()); // Axios

// // exit;

echo "<br/>";
$car2 = new Car();
$car2->setName('Toyota Corolla');

echo "Car 2: ";
var_dump($car2->getName()); // Corolla
echo "<br/>";
// var_dump($car1->getName()); // Axios -- ??


// // exit;



$car3 = new Car();
$car3->name = 'Toyota Premio';

var_dump($car3->getName());



// $myOwnObject= new \stdClass();

// $myOwnObject->name = 'John Doe';
// $myOwnObject->age = 19;

// var_dump($myOwnObject);