<?php


use App\model\circleProducts;

class circleProductTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function check_create_circle_and_get_price(){
        $circle_product=new circleProducts(25);
        $this->assertEquals('392.5',$circle_product->getPrice());
    }
}