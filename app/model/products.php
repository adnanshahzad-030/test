<?php


namespace App\model;


use App\traits\priceTrait;

abstract  class products
{
protected $pre_define=2.5;
protected $area;
protected $price;
use priceTrait;

}