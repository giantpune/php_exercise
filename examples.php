<?php

// import the "library"
require_once dirname(__FILE__) . '/lib/catalog.php';
require_once dirname(__FILE__) . '/lib/database.php';
require_once dirname(__FILE__) . '/lib/item.php';

// create a database and a Calalog 
$db = new Database();
$catelog = new Catalog( $db );

// common function to display a list of items
function PrintItems( $inventory )
{
  foreach($inventory as $item)
  {
    echo 'sku: ' . $item->sku .
    '|name: ' . $item->name . 
    '|quantity: ' . $item->quantity .
    '|baseprice: ' . money_format('$%i', $item->basePrice);

    echo '|price: ' . ($item->basePrice > $item->salesPrice ? 'SALE! ' : '' ) . money_format('$%i', $item->salesPrice) . 
    '|color: ' . $item->color;

    if( get_class( $item ) == 'Pet' )
    {
      $ts = $item->dateOfBirth;
      $dt = new DateTime("@$ts");
      echo '|dateOfBirth: ' . $dt->format('m/d/Y') . 
      '|lifeSpan: ' . $item->lifeSpan . 
      '|age: ' . $item->age;
    }

    if( isset($item->description) && trim($item->description) !== '' )
    {
      echo '|description: ' . $item->description;
    }
    if( isset($item->notes) && trim($item->notes) !== '' )
    {
      echo '|notes: ' . $item->notes;
    }

    echo PHP_EOL;
  }
  echo str_repeat("-=", 40) . PHP_EOL;
}

function GetItemsAndDisplayThem( $catelog, $filters, $sorter, $sortDescending = False )
{
  $inventory = $catelog->GetItems( $filters, $sorter, $sortDescending );
  PrintItems( $inventory );
}

$examples = array(
  function( $catelog )
  {
    echo "All items in the inventory, sorted by SKU" . PHP_EOL;
    $filters = array();
    $sorter = new Sorter( 'sku' );
    GetItemsAndDisplayThem( $catelog, $filters, $sorter );
  },
  function( $catelog )
  {
    echo "All pets, sorted by age ascending" . PHP_EOL;
    $filters = array();
    array_push( $filters, new CategoryContainsFilter( 'type', array( 'pet' ) ) );
    $sorter = new Sorter( 'age' );
    GetItemsAndDisplayThem( $catelog, $filters, $sorter );
  },
  function( $catelog )
  {
    echo "All pets, sorted by lifespan descending" . PHP_EOL;
    $filters = array();
    array_push( $filters, new CategoryContainsFilter( 'type', array( 'pet' ) ) );
    $sorter = new Sorter( 'lifeSpan' );
    GetItemsAndDisplayThem( $catelog, $filters, $sorter, True );
  },
  function( $catelog )
  {
    echo "All cats, sorted by name" . PHP_EOL;
    $filters = array();
    array_push( $filters, new CategoryContainsFilter( 'type', array( 'pet' ) ) );
    array_push( $filters, new CategoryContainsFilter( 'petType', array( 'cat' ) ) );
    $sorter = new Sorter( 'name' );
    GetItemsAndDisplayThem( $catelog, $filters, $sorter );
  },
  function( $catelog )
  {
    echo "All dogs, sorted by name" . PHP_EOL;
    $filters = array();
    array_push( $filters, new CategoryContainsFilter( 'type', array( 'pet' ) ) );
    array_push( $filters, new CategoryContainsFilter( 'petType', array( 'dog' ) ) );
    $sorter = new Sorter( 'name' );
    GetItemsAndDisplayThem( $catelog, $filters, $sorter );
  },
  function( $catelog )
  {
    echo "All reptiles, sorted by color" . PHP_EOL;
    $filters = array();
    array_push( $filters, new CategoryContainsFilter( 'type', array( 'pet' ) ) );
    array_push( $filters, new CategoryContainsFilter( 'petType', array( 'reptile' ) ) );
    GetItemsAndDisplayThem( $catelog, $filters, new Sorter( 'color' ) );
  },
  function( $catelog )
  {
    echo "All mammals, sorted by age" . PHP_EOL;
    $filters = array();
    array_push( $filters, new CategoryContainsFilter( 'type', array( 'pet' ) ) );
    array_push( $filters, new CategoryContainsFilter( 'petType', array( 'cat', 'dog' ) ) );
    GetItemsAndDisplayThem( $catelog, $filters, new Sorter( 'age' ) );
  },
  function( $catelog )
  {
    echo "All non-animal items, sorted by price descending" . PHP_EOL;
    $filters = array();
    array_push( $filters, new CategoryContainsFilter( 'type', array( 'accessory' ) ) );
    GetItemsAndDisplayThem( $catelog, $filters, new Sorter( 'salesPrice' ), True );
  },
  function( $catelog )
  {
    echo "All brown or blue non-animal items, sorted by price descending" . PHP_EOL;
    $filters = array();
    array_push( $filters, new CategoryContainsFilter( 'type', array( 'accessory' ) ) );
    array_push( $filters, new CategoryContainsFilter( 'color', array( 'brown', 'blue' ) ) );
    GetItemsAndDisplayThem( $catelog, $filters, new Sorter( 'salesPrice' ), True );
  },
  function( $catelog )
  {
    echo "Anything brown" . PHP_EOL;
    $filters = array();
    array_push( $filters, new CategoryContainsFilter( 'color', array( 'brown' ) ) );
    GetItemsAndDisplayThem( $catelog, $filters, new Sorter( 'salesPrice' ), True );
  },
  function( $catelog )
  {
    echo "Anything brown between $20 and $70 (inclusive), priced high to low" . PHP_EOL;
    $filters = array();
    array_push( $filters, new CategoryContainsFilter( 'color', array( 'brown' ) ) );
    array_push( $filters, new NumberRangeFilter( 'salesPrice', 20, 70 ) );
    GetItemsAndDisplayThem( $catelog, $filters, new Sorter( 'salesPrice' ), True );
  },
  function( $catelog )
  {
    echo "Anything priced >= $100, priced low to high" . PHP_EOL;
    $filters = array();
    array_push( $filters, new NumberRangeFilter( 'salesPrice', 100, 999999 ) );
    GetItemsAndDisplayThem( $catelog, $filters, new Sorter( 'salesPrice' ) );
  },
  function( $catelog )
  {
    echo "All pets with lifespan >= 25yr, sorted by lifespan descending" . PHP_EOL;
    $filters = array();
    array_push( $filters, new CategoryContainsFilter( 'type', array( 'pet' ) ) );
    array_push( $filters, new NumberRangeFilter( 'lifeSpan', 25, 999999 ) );
    $sorter = new Sorter( 'lifeSpan' );
    GetItemsAndDisplayThem( $catelog, $filters, $sorter, True );
  }
);

// run all the examples
foreach( $examples as $example )
{
  $example( $catelog );
}

?>
