<?php

trait Logger {
    public function log($message) {
        echo "Log: " . $message . "\n";
    }
}

trait Notifier {
    public function notify($message) {
        echo "Notification: " . $message . "\n";
    }
}

class User {
    use Logger, Notifier;

    public function createUser($username) {
        $this->log("User '$username' created.");
        $this->notify("Welcome, $username!");
    }
}

class Product {
    use Logger, Notifier;

    public function createProduct($productName) {
        $this->log("Product '$productName' created.");
        $this->notify("New product available: $productName.");
    }
}

$user = new User();
$user->createUser("Brijesh07");

$product = new Product();
$product->createProduct("Widget");
?>
