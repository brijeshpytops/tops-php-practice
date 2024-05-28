<?php
    class person{
        // Properties
        public $name;
        public $password;
        public $pin;

        // Method
        public function display(){
            echo "Name : " . $this->name . "\n";
            echo "Password : " . $this->password . "\n";
            echo "Pin : " . $this->pin . "\n";
        }

    }

    $obj = new person();

    $obj->name = "Brijesh";
    $obj->password = "test@123";
    $obj->pin = 1234;

    $obj->display();
?>