<?php
class Car {
    private $model;
    private $color;

    public function __construct($model, $color) {
        $this->model = $model;
        $this->color = $color;
    }

    public function getModel() {
        return $this->model;
    }

    public function getColor() {
        return $this->color;
    }
    public function setColor($color) {
        $this->color = $color;
    }
}

$car = new Car("Toyota", "Red");

echo "Model: " . $car->getModel();
echo "Color: " . $car->getColor(); 

$car->setColor("Blue");

echo "Updated Color: " . $car->getColor();

?>