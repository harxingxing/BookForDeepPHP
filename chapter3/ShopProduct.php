<?php
/**
 * Created by PhpStorm.
 * User: hanxinxing
 * Date: 2018/5/3
 * Time: 16:54
 */

class ShopProduct
{
    public $title = 'title';
    var $content = '';//旧的关键字可以使用var，方法和属性默认设置为public

    /**
     * ShopProduct constructor.
     * 我被实例化时会被执行到，但如果两者同时存在只有我被执行
     */
    public function __construct()
    {
        $this->title = 'title被改成了title2';
    }

    /**
     * 我被实例化时会被执行到
     */
    public function ShopProduct()
    {
        $this->title = 'title被改成了title3';
    }

    /**
     * 必须传入ShopProduct类型的对象
     * @param ShopProduct $shopProduct
     */
    public function mustShopProductType(ShopProduct $shopProduct)
    {
        echo $shopProduct->title;
    }


}