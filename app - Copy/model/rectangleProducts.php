<?php


namespace App\model;

use App\interfaces\productInterface;
use App\model\products;

class rectangleProducts extends products implements productInterface
{
    /*
   |--------------------------------------------------------------------------
   | Class for rectangle Products
   |--------------------------------------------------------------------------
   |
   | This class is child class of product class & use for all rectangle type products.
   |
   */
    protected $side1;
    protected $side2;
    /**
     * Create a new rectangle_product instance.
     *
     * @return void
     */
    public function __construct($side1,$side2)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->area = $this->getArea();
    }
    /**
     * Method for calculate area of product
     *
     * @return area of product
     */
    public function getArea()
    {
        return $this->side2 * $this->side2;
    }
}