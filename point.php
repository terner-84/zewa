<?php

class Souradnice {
    private $height;
    private $width;

    public function __constructor($width, $height) {
        $this->height = $height;
        $this->width = $width;
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

}

$hodnoty = [];

array_push($hodnoty, rand(10, 280));
array_push($hodnoty, rand(40, 80));

echo json_encode($hodnoty);

