<?php
// 1.��������������ԣ� ��װ���̳У���̬

//��
class Man{
  //����
  public $name;
  public $age;
  //����
  public function cry(){
    echo '55555';
  }
}
//����ʵ������Ľ��
$m1 = new Man;
$m1->name = "xiaoming";
$m1->age = 18;
$m1->cry();
var_dump($m1);