<?php


use App\model\rectangleProducts;

class rectangleProductTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function check_create_rectangle_and_get_price(){
        $rectangle_product=new rectangleProducts(20,20);
        $this->assertEquals('1000',$rectangle_product->getPrice());
    }
}