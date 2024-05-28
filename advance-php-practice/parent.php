<?php
class ParentClass {
    public function display() {
        echo "Parent display";
    }
}

class ChildClass extends ParentClass {
    public function display() {
        parent::display();
        echo " and Child display";
    }
}

$child = new ChildClass();
$child->display();
?>
