<?php
class MyClass {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

$obj = new MyClass("Brijesh");
echo $obj->getName();
?>