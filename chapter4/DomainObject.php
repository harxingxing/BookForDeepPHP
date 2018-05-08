<?php
/**
 * Created by PhpStorm.
 * User: hanxinxing
 * Date: 2018/5/8
 * Time: 15:03
 */

abstract class DomainObject
{
    public static function create(){
//        return new self();//这里会出错
        return new static();
    }
}

class User extends DomainObject
{
}

class Document extends DomainObject
{
}