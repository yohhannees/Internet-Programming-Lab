<?php
require_once("classA.php");
require_once("classB.php");
require_once("classC.php");

use MyNamespaceA\ClassA;
use MyNamespaceB\ClassB;
use MyNamespaceC\ClassC;


$classA = new ClassA();
$classB = new ClassB();
$classC = new ClassC();


?>