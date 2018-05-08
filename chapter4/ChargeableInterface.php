<?php
/**
 * Created by PhpStorm.
 * User: hanxinxing
 * Date: 2018/5/7
 * Time: 9:47
 */

/**
 * 接口实例
 * Interface ChargeableInterface
 */
interface ChargeableInterface
{
    public function getPrice();
}

interface Bookable
{
    public function getBookPrice();
}

class TimedService
{

}

/**
 *extends子句应该在implements子句之前，这里实现了多个接口
 * Class Consultancy
 */
class Consultancy extends TimedService implements Bookable, ChargeableInterface
{
    public function getPrice(){}

    public function getBookPrice(){}
}