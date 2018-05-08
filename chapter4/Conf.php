<?php
/**
 * Created by PhpStorm.
 * User: hanxinxing
 * Date: 2018/5/8
 * Time: 15:20
 */

class Conf
{
    private $file;
    public $xml;
    private $lastmatch;

    function __construct($file)
    {
        $this->file = $file;
        $this->xml = simplexml_load_file($file);
    }

    function write()
    {
        file_put_contents($this->file, $this->xml->asXML());
    }
}