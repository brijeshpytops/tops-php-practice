<?php
class ParentClass {
    public function parentMethod() {
        echo "This is a parent method.";
    }
}

class ChildClass extends ParentClass {
    public function childMethod() {
        echo "This is a child method.";
    }
}

$child = new ChildClass();
$child->parentMethod();
?>