<?php


namespace App\model;

use App\interfaces\productInterface;
use App\model\products;

class circleProducts extends products implements productInterface
{
    /*
  |--------------------------------------------------------------------------
  | Class for circle Products
  |--------------------------------------------------------------------------
  |
  | This class is child class of product class & use for all circle type products.
  |
  */
    protected $PI;
    protected $radius;
    /**
     * Create a new circle_product instance.
     *
     * @return void
     */
    public function __construct($radius)
    {
        $this->PI = 3.14;
        $this->radius = $radius;
        $this->area = $this->getArea();
    }
    /**
     * Method for calculate area of product
     *
     * @return area of product
     */
    public function getArea()
    {
        return $this->PI * $this->radius * 2;
    }
}