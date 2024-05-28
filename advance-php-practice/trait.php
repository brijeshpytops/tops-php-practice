<?php

trait Logger {
    public function log($message) {
        echo "Log: " . $message . "\n";
    }
}

class User {
    use Logger;

    public function createUser($username) {
        $this->log("User '$username' created.");
    }
}

class Product {
    use Logger;

    public function createProduct($productName) {
        $this->log("Product '$productName' created.");
    }
}

$user = new User();
$user->createUser("Brijesh07");

$product = new Product();
$product->createProduct("Widget");


?>