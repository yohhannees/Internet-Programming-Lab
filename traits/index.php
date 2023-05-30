<?php
 trait Message1 {
    public function sayHello1() {
        echo 'Hello trait 1 message 1';
    }
}


trait Message2 {
    public function sayHello2() {
        echo 'Hello trait 2 message 2';
    }
}


class Welcome1 {
    use Message1;
}
class Welcome2 {
    use Message1, Message2;
}



$obj = new Welcome1();
$obj->sayHello1();
echo "\n";
$obj = new Welcome2();
$obj->sayHello1();
echo "\n";
$obj->sayHello2();

?>