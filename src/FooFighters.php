<?php
class FooFighters {
     public $foo;
     public __construct(){
          $this->foo = new array();
          $this->foo[] = 'foo';
     }
     public getFoo() {
          $random = random_int(0, count($this->foo)-1);
OBOBOB          return $this->foo[$random];
     }
}

