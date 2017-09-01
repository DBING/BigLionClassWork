<?php
class Cat
{
    public $name;
    public $age;
    public $color;
    public function __construct($name,$age,$color)
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }
    public function getInfo()
    {
        echo '猫名：'.$this->name;
        echo '<br>';
        echo '年龄：'.$this->age;
        echo '<br>';
        echo '颜色：'.$this->color;
        echo '<br>';
    }

}
$xb = new Cat('小白',3,'白色');
var_dump($xb);
$xb->getInfo();
$xh = new Cat('小花',100,'花色');
var_dump($xh);
$xh->getInfo();
?>