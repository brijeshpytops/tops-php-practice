<?php

interface Logger {
    public function log($message);
}

interface Notifier {
    public function notify($message);
}

class User implements Logger, Notifier {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function log($message) {
        echo "Log: " . $message . "\n";
    }

    public function notify($message) {
        echo "Notification: " . $message . "\n";
    }

    public function createUser() {
        $this->log("User '$this->name' created.");
        $this->notify("Welcome, $this->name!");
    }
}

$user = new User("JohnDoe");
$user->createUser();
?>
