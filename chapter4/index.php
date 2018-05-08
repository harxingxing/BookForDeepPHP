<?php
/**
 * Created by PhpStorm.
 * User: hanxinxing
 * Date: 2018/5/4
 * Time: 17:03
 * study from:深入PHP面向对象、模式与实践
 */
//include_once
$root = dirname(dirname(__FILE__));
require_once $root . DIRECTORY_SEPARATOR . 'conf.php';
include_once 'ShopProduct.php';
/**
 * 对一个非静态方法进行静态形式的调用的几个特别形式
 */
//BookProduct::testStaticsStyle();

include_once 'ShopProductWriterAbstract.php';
/**
 * 严重错误：实例化抽象类会出错
 */
//new ShopProductWriterAbstract();

/**
 * 试图改变一个常量的值，结果会报语法错误
 */
//ShopProduct::CONST_DEMO = '我想改变常量';

include_once 'DomainObject.php';
/**
 * 重要：延迟静态绑定：static关键字
 */
//Document::create();

include_once 'Conf.php';
//错误处理
$confObj = new Conf($conf['public'] . 'p50.xml');

/**
 * 知识点:
 * 只有在使用parent关键字调用方法的时候，才能对一个非静态方法进行静态形式的调用，除非是一访问一个被覆写的方法。p41
 * 大多数情况下，抽象类至少包含一个抽象方法。抽象方法用abstract关键字生命，其中不能有具体内容。你可以像声明普通类方法
 *     那样声明抽象方法，但要以分号而不是方法体结束。p44
 * 抽象类的每个子类都必须实现抽象类中的所有抽象方法，或者把他们自身也声明为抽象方法。p45
 * 新的实现方法的访问控制不能比抽象方法的访问控制更严格。新的实现方法的参数个数应该和抽象方法的参数个数一样，重新生成对
 *     应得类型提示。p45
 * 抽象类提供了具体实现的标准，而接口则是纯粹的模板。p46
 * 任何实现接口的类都要实现接口中所定义的所有方法，否则该类必须声明为abstract。p46
 * 由于任何类都可以实现接口（实际上，一个类可以实现多个接口），接口可以有效地将不相关的类型联结起来。p47
 * extends子句应该在implements子句之前。p47
 * static类似于self，但它指的是被调用的类而不是包含类。p48,89
 *
 *
 * 个人总结：
 * 抽象类和普通类一样，使用extends继承。
 *
 *
 * 关键字：
 * static:静态方法(1.静态属性或方法必须用static关键字来声明 2.静态方法不能访问这个类中的普通属性（那些属性属于一个对象）
 *        3.使用::（两个冒号）来连接类名和属性或类名和方法)p40,41
 * self:指当前类
 * const：常量，只包含基本属性类型的值，不能将一个对象指派给常量；只能通过类而不是类的实例访问常量属性；常量不能加$符号；
 *        给已声明过的常量赋值会引起解析错误
 * abstract：抽象类，不能直接被实例化。抽象类中只定义（或部分实现）子类需要的方法。子类可以继承它并且通过实现其中的抽象
 *           方法，使抽象类具体化。p44
 * interface：接口声明关键字，接口可以包含属性和方法声明，但是方法体为空。p46
 * implements：用来实现接口的关键字。p46
 */