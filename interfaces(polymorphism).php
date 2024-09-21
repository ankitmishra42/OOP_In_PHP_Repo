<!-- Interfaces(polymorphism) support multiple inheritance -->
<!-- Interfaces(polymorphism) can only contain abstract function  -->
<!-- In Interfaces(polymorphism) we cann't create variables(properties) -->
<!-- No constractor in Interfaces(polymorphism) -->
<!-- All function must be public -->

<?php
Interface Aadhar {
    public function testAadhar();
}
Interface PAN{
    public function testPAN();
}

class DL implements Aadhar, PAN {
    public function testAadhar() {
        echo "<br>Aadhar";
    }
    public function testPAN() {
        echo "<br>PAN";
    }
    public function testself() {
        echo "<br>self";
    }

}

$obj = new DL();

$obj->testAadhar();
$obj->testPAN();
$obj->testself();


class BankAC implements Aadhar, PAN {
    public function testAadhar() {
        echo "<br><br>bank Aadhar";
    }
    public function testPAN() {
        echo "<br>bank PAN";
    }
    public function testselfAC() {
        echo "<br>selfAC";
    }

}


$obj2 = new BankAC();

$obj2->testAadhar();
$obj2->testPAN();
$obj2->testselfAC();
?>