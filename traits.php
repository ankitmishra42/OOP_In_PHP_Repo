<?php
class A {
    public function testPass() {
        echo "Function0";
    }
}

trait TraitName
{
    public function testPass1() {
        echo "TraitFunction";
    }
}

class B extends A {
    use TraitName;
    public function testAadhar() {
        echo "Function1";
    }
}

class C extends B {
    public function testPAN() {
        echo "Function2";
    }
    
}

class D extends C{
    public function testself() {
        echo "Function3";
    }
    
}

$obj = new D();
$obj2 = new B();

$obj->testPass1();
$obj2->testPass1();

$obj->testPass();
$obj->testAadhar();
$obj->testPAN();
$obj->testself();
?>