<?php


use App\model\triangleProducts;

class triangleProductTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function check_create_triangle_and_get_price(){
        $triangle_product=new triangleProducts(25,10);
        $this->assertEquals('312.5',$triangle_product->getPrice());
    }
}