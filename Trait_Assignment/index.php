<?php

trait Trait1 {
    public function myFunction() {
        echo "Trait1 function called";
    }
}

trait Trait2 {
    public function myFunction() {
        echo "Trait2 function called";
    }
}


class MyClass1 {
    public function myFunction() {
        echo "MyClass1 function called";
    }
}

class MyClass2 {
    
    public function myFunction() {
        echo "MyClass2 function called";
    }
}



class MyClass {
    use Trait1, Trait2 {
        Trait1::myFunction insteadof Trait2;
        Trait1::myFunction as myFunction1;
        Trait2::myFunction as myFunction2;


    }

      public function myFunction() {
        echo "MyClass function called";
    }
}

// Accessing the class functions
$obj1 = new MyClass1();
$obj1->myFunction(); // Output: MyClass1 function called
echo "\n";
echo "\n";

$obj2 = new MyClass2();
$obj2->myFunction(); // Output: MyClass2 function called
echo "\n";
echo "\n";
// Accessing the Traits function
$obj = new MyClass();
$obj->myFunction();    // Output: Trait1 function called
echo "\n";
echo "\n";
$obj->myFunction1();   // Output: Trait2 function called
echo "\n";
echo "\n";
$obj->myFunction2();   // Output: MyClass function called
echo "\n";
echo "\n";
