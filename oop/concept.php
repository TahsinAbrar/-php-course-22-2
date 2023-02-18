<?php


// we have learned about class and object

// Object-oriented Programming

// constructor -- destructor --abstract -- trait

// pillar of OOP

/*

- Encapsulation
- Inheritance -- What is it?
- Polymorphism
  - Method overloading
  - Method overriding
- Abstraction

class MyClass
{
    public function write()
    {
        return "my world";
    }
}

class MyAnotherClass extends MyClass
{
    protected function write()
    {
        return "write to another world";
    }
}


-- Java and JavaScript

-- Abstract class is not Abstraction

-- "Abstraction" is not "Abstract class"

-- implement (interface) vs extends (class)


-- What is Abstract class?
-- What is Interface?
-- Abstract class vs Interface

-- What is static method?

*/

class Car
{
    // access modifier: public, protected, private

    protected $name; // properties

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}


// grandfather --> father --> YOU


// access modifier

// 

class GrandFather
{
    private function hairColor()
    {
        return 'brown';
    }

    public function eyeColor()
    {
        return 'blue';
    }
}

class Father extends GrandFather
{
    public function sum($a, $b)
    {
        return $a + $b;
    }

    public function myBuilding()
    {
        return 'navana';
    }

    public function eyeColor()
    {
        return 'green';
    }
}

class You extends Father
{
    // __call()
    // public function sum($a, $b, $c)
    // {
    //     return $a + $b + $c;
    // }

    public function myBuilding()
    {
        return "my New Building at Mohammadpur";
    }

    private function myNewHandset()
    {
        return $this->myBuilding();
    }

    public function getHandsetList()
    {
        return $this->myNewHandset(); // in this case, private properties/methods can be accessible
    }

    protected function hairColor()
    {
        return "orange";
    }

    public function myHairColor()
    {
        return $this->hairColor();
    }

    public function eyeColor()
    {
        return 'black';
    }
}


$yourObj = new You();
echo "Hair color: ";
// echo $yourObj->hairColor();
echo $yourObj->myHairColor();
echo "<br/>";
echo "Eye color: ";
echo $yourObj->eyeColor(); // green
echo $yourObj->getHandsetList(); // green

exit;

class Toyota extends Car
{
    //
}

$car1 = new Car();

$car1->setName('Corolla');

var_dump($toyota->name);