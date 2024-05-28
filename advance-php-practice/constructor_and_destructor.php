<?php

class Example {
    // Constructor method
    public function __construct() {
        echo "Constructor called. Object created.\n";
    }

    // Destructor method
    public function __destruct() {
        echo "Destructor called. Object destroyed.";
    }
}

$example = new Example();
unset($example);

?>