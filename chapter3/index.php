<?php
/**
 * Created by PhpStorm.
 * User: hanxinxing
 * Date: 2018/5/3
 * Time: 16:55
 * study from:深入PHP面向对象、模式与实践
 */
include_once 'ShopProduct.php';

//php允许动态设置类属性，但如果拼错或忘记属性名时并不会得到警告
$product1 = new ShopProduct();
$product1->title;
$product1->spec = '90*90';
$product1->spec;//这里不提示

/**
 * 测试：构造函数（实例化即被执行）
 * 结论：
 * 1.__construct()与类名称相同的函数都可以
 * 2.两者如果同时存在则近执行__construct()
 */
//echo $product1->title;

/**
 * 测试：传入类型必须是指定类的对象
 */
//class Wrong{}
//$product1->mustShopProductType(new ShopProduct());
//$product1->mustShopProductType(new Wrong());//会出错，必须是ShopProduct类型




/**
 * 知识点:
 * 在面向对象开发中，“专注特定任务，忽略外界上下文”是一个重要的设计原则。p24
 * 要引用一个类而不是对象的方法，可以使用::而不是->。p33
 * 基类仅知道自己的数据，子类一般是父类的特例，我们应该避免告诉父类任何关于子类的信息，这是一条经验规则。p34
 * parent关键字可以在任何覆写父类方法的方法中使用。覆写一个父类的方法时，我们并不希望删除父类的功能，而是拓展它，通过在当前对象调用父类的方法可以达到这个目的。p34
 * 一般来说，我们倾向于严格控制可访问性。最好将类属性初始化为private或protected，然后在需要的时候再放松限制条件。类中的许多（如果不是大多数）方法都可以是public，但如果拿不定主意的话就限制一下。p36
 * 访问方法定义：p36
 *
 * 个人总结：
 * 在方法中，检测数据的类型是很必要做的一步，。p24
 * 在参数中检测指定参数对象的类型有：某个类的类名，array
 *
 * 关键字：
 * extends：继承父类
 * parent：父类
 * __construcrt：构造方法，在new一个实例时作初始化操作
 */