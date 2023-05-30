<?php
namespace MyNamespaceB;

class ClassB {
    public function __construct() {
        echo "ClassB constructor called\n";
        error_log("ClassB constructor called");
    }
}
?>