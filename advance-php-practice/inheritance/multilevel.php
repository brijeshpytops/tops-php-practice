<?php
class GrandparentClass {
    public function grandparentMethod() {
        echo "This is a grandparent method.";
    }
}

class ParentClass extends GrandparentClass {
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
$child->grandparentMethod();
?>