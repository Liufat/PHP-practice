<?php

class Person {
    public $name;
    private $age;


    function __construct($name = "John", $age = 18)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function getInfo(){
        return json_encode([
            'name' => $this->name,
            'age' => $this->age,
        ]);
    }
}

$p1 = new Person("David" , 23);
$p1 ->name = "Fiona";

echo $p1->getInfo();