<?php

/**
 * Created by PhpStorm.
 * User: adnan
 * Date: 1/15/2018
 * Time: 3:01 PM
 */
namespace App\traits;
trait priceTrait
{
public function getPrice(){
    return round($this->pre_define*$this->area,2);
}
}