<?php


namespace App\model;

use App\interfaces\productInterface;
use App\model\products;

class triangleProducts extends products implements productInterface
{
    /*
|--------------------------------------------------------------------------
| Class for triangle Products
|--------------------------------------------------------------------------
|
| This class is child class of product class & use for all triangle type products.
|
*/
    protected $height;
    protected $base;
    /**
     * Create a new triangle_product instance.
     *
     * @return void
     */
    public function __construct($height,$base)
    {
        $this->height = $height;
        $this->base = $base;
        $this->area = $this->getArea();
    }

    /**
     * Method for calculate area of product
     *
     * @return area of product
     */
    public function getArea()
    {
        return $this->height * $this->base/2;
    }
}