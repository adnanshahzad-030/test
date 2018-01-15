<?php

include_once "vendor/autoload.php";
use App\model\circleProducts;
use App\model\rectangleProducts;
use App\model\triangleProducts;

$circleProduct=new circleProducts(25);
echo "Circle product price=$ ".$circleProduct->getPrice()."<br/>";

$triangleProduct=new triangleProducts(25,10);
echo "Triangle product price=$ ".$triangleProduct->getPrice()."<br/>";

$rectangleProduct=new rectangleProducts(20,20);
echo "Rectangle product price=$ ".$rectangleProduct->getPrice()."<br/>";