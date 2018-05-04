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
    const CONST_DEMO = '我是常量';

    /**
     * ShopProduct constructor.
     * 我被实例化时会被执行到，但如果两者同时存在只有我被执行
     */
    public function __construct()
    {
        $this->title = 'title被改成了title2';
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

class BookProduct extends ShopProduct
{

    public static function testStaticsStyle()
    {
        //使用parent关键字调用方法，可以对一个非静态方法进行静态形式的调用
        parent::mustShopProductType(new self());
        //访问一个被覆写的方法也可以对一个非静态方法进行静态形式的调用
        self::mustShopProductType(new self());
    }
}