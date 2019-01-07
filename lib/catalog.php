<?php

require_once 'database.php';
require_once 'item.php';

abstract class ItemFilter 
{
  abstract function Allows( $item );
}

class CategoryContainsFilter extends ItemFilter
{
  public $categoryName;
  public $values;

  function __construct( $categoryName, $values )
  {
    $this->categoryName = $categoryName;
    $this->values = $values;
  }

  function Allows( $item )
  {
    $category = $this->categoryName;
    return in_array( $item->$category, $this->values );
  }
}

class NumberRangeFilter extends ItemFilter
{
  public $categoryName;
  public $valueMin;
  public $valueMax;

  function __construct( $categoryName, $valueMin, $valueMax )
  {
    $this->categoryName = $categoryName;
    $this->valueMin = $valueMin;
    $this->valueMax = $valueMax;
  }

  function Allows( $item )
  {
    $category = $this->categoryName;
    return $this->valueMin <= $item->$category 
        && $item->$category <= $this->valueMax;
  }
}

class Sorter
{
  public $categoryName;

  function __construct( $categoryName = 'salesPrice' )
  {
    $this->categoryName = $categoryName;
  }

  function CompareItems( $a, $b )
  {
    $category = $this->categoryName;

    $valA = $a->$category;
    $valB = $b->$category;

    // they're the same
    if( $valA == $valB )
    {
      return 0;
    }

    // if one value is null, then the other is better
    if( is_null( $valB ) )
    {
      return 1;
    }
    else if( is_null( $valA ) )
    {
      return -1;
    }

    // now compare them.
    return ( $valA < $valB ) ? -1 : 1;
  }
}

class Catalog
{
  protected $db;
  function __construct( $database )
  {
    $this->db = $database;
  }

  function AllFiltersAllowThisItem( $item, $filters )
  {
    foreach( $filters as $filter)
    {
      if( !$filter->Allows( $item ) )
      {
        return False;
      }
    }
    return True;
  }

  // helper functions for handling dates
  function DateTimeFromTimestamp($ts)
  {
    return new DateTime("@$ts");
  }

  function GetAge($birthDate) {
    return $birthDate->diff(new DateTime('now'))->y;
  }

  function SetSalesPrice( &$item )
  {
    // default behavior - sales price in the base price
    $item->salesPrice = $item->basePrice;

    // pets are discounted if they are older than half of their average lifespan
    if( get_class( $item ) == 'Pet' )
    {
      $dt = $this->DateTimeFromTimestamp( $item->dateOfBirth );
      $item->age = $this->GetAge( $dt );
      if( $item->age > ( $item->lifeSpan / 2 ) )
      {
        $item->salesPrice /= 2;
      }
    }
  }

  function GetItems( $filters, $sorter, $sortDescending = True )
  {
    // start by getting a list of all the items we have
    $inventory = $this->db->GetInventory();
    $filteredList = array();

    // filter out the items we don't want to return
    foreach($inventory as $item)
    {
      // set the "sales price" which may include discounts and daily deals
      $this->SetSalesPrice( $item );

      // only include items which pass through all the filters
      if( $this->AllFiltersAllowThisItem( $item, $filters ) )
      {
        array_push($filteredList, $item);
      }
    }

    // now sort the list
    uasort( $filteredList, array($sorter, 'CompareItems') );

    if( $sortDescending )
    {
      $filteredList = array_reverse( $filteredList );
    }

    return $filteredList;
  }
}

?>
