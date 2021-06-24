<?php
class Base {
  public function sayHello() {
    echo ' HIHI ';
  }
}
trait SayWorld {
  public function sayHello() {  
    parent::sayHello(); /*繼承 Base 一樣的名字*/
    echo 'HAHA';
  }
}
class MyHelloWorld extends Base {/**接到 class Base 然後使用 SayWorld */
  use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();
?>