<?php

abstract class Item 
{
  // gathered from the database
  public $basePrice;
  public $color;
  public $dateOfBirth;
  public $description;
  public $lifeSpan;
  public $name;
  public $notes;
  public $petType;
  public $quantity;
  public $sku;
  public $type;

  // calculated and cached values
  public $salesPrice;
  public $age;
}

class Pet extends Item
{
}

class Accessory extends Item
{
  function __construct()
  {
    $this->dateOfBirth = -1;
    $this->lifeSpan = -1;
    $this->age = '';
  }
}

?>
