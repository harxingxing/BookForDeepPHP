<?php
/**
 * Created by PhpStorm.
 * User: hanxinxing
 * Date: 2018/5/7
 * Time: 9:22
 */

abstract class ShopProductWriterAbstract
{
    protected $products = array();

    public function addProduct(ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }

    //大多数情况下，抽象类至少包含一个抽象方法,其中不能有具体内容，以分号而不是方法体结束
    abstract public function write();
}