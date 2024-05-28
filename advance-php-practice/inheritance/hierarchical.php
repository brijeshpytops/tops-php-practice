<?php
class ParentClass {
    public function parentMethod() {
        echo "This is a parent method.";
    }
}

class ChildClass1 extends ParentClass {
    public function childMethod1() {
        echo "This is a child method 1.";
    }
}

class ChildClass2 extends ParentClass {
    public function childMethod2() {
        echo "This is a child method 2.";
    }
}

$child1 = new ChildClass1();
$child1->parentMethod();
?>