<?php
class Beverage {
  private $color;

  function setColor($color) {
  if (gettype($color) === "string") {
    $this->color = strtolower($color);
    return true;
  } else {
    return false;
  }
}
  function getColor() {
    return $this->color;
  }


}

$soda = new Beverage();
$soda->setColor("Red");
echo $soda->getColor();
