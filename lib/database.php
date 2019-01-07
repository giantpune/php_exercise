<?php

require_once 'item.php';

// requires sqlite3 module installed and enabled
// sudo apt-get install php-sqlite3
// phpenmod -v 7.2 sqlite3

class Database extends SQLite3
{
  function __construct()
  {
    $this->open( dirname(dirname(__FILE__)) . '/data/petstore.db', SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE );
  }

  function GetInventory()
  {
    $qry = $this->query('SELECT * from inventory');
    $ret = array();
    while($row = $qry->fetchArray(SQLITE3_ASSOC) )
    {
      if ( $row['item_type'] == 'pet' )
      {
        $item = new Pet();
        $item->petType = $row['pet_type'];
      }
      else
      {
        $item = new Accessory();
      }

      $item->basePrice = $row['price'];
      $item->color = $row['color'];
      $item->dateOfBirth = $row['dob'];
      $item->description = $row['description'];
      $item->lifeSpan = $row['lifespan'];
      $item->name = $row['name'];
      $item->notes = $row['notes'];
      $item->quantity = $row['quantity'];
      $item->sku = $row['sku'];
      $item->type = $row['item_type'];

      array_push($ret, $item);

    }
    return $ret;
  }
}

?>
