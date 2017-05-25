<?php

class ProductInventory
{
    /**
    * Get the count of a certain product
    * @param string $product_type the product being looked up
    * @return int current inventory of the given product
    */
    public function check_inventory($product_type)
    {
        $product = InventoryItemFactory::getItem($product_type);
        return $product->getStock();
    }
}

class InventoryItemFactory
{
    public static function getItem($product_type)
    {
        switch($product_type)
        {
          case 'chair':
            $product = new Product_Chair();
          break;

          case 'table':
            $product = new Product_Table();
          break; 

          case 'sofa':
            $product = new Product_Sofa();
          break;

          case 'bookcase':
            $product = new Product_Bookcase();
          break;
        }

        return $product;
    }
}

interface InventoryItem
{
    public function getStock();
}

class Product_Chair implements InventoryItem
{
    protected $type = 'chair';
    protected $current_stock = 20;

    public function getStock()
    {
    return $this->current_stock;
    }
}

class Product_Table implements InventoryItem
{
    protected $type = 'table';
    protected $current_stock = 0;

    public function getStock()
    {
    return $this->current_stock;
    }
}

class Product_Bookcase implements InventoryItem
{
    protected $type = 'bookcase';
    protected $current_stock = 3;

    public function getStock()
    {
    return $this->current_stock;
    }
}

class Product_Sofa implements InventoryItem
{
    protected $type = 'sofa';
    protected $current_stock = 10;

    public function getStock()
    {
    return $this->current_stock;
    }
}

$product_inventory = new ProductInventory();
$chair_inventory = $product_inventory->check_inventory('chair');
var_dump($chair_inventory);

$chair_inventory = $product_inventory->check_inventory('table');
var_dump($chair_inventory);

$chair_inventory = $product_inventory->check_inventory('bookcase');
var_dump($chair_inventory);

$chair_inventory = $product_inventory->check_inventory('sofa');
var_dump($chair_inventory);
