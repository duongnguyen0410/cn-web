<?php
class MethodTest {
    public function __call($name, $args) {
        echo "Calling object method '$name' "
             . implode(', ', $args) . "<br>";
    }

    public static function __callStatic($name, $args) {
        echo "Calling static method '$name' "
             . implode(', ', $args) . "<br>";
    }
}

$obj = new MethodTest;
$obj->runTest('in object context');
MethodTest::runTest('in static context');
?>