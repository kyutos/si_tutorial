<?php
function foo() {
    static $static = 0;
    $static++;
    echo $static;
}

foo();
foo();
foo();

?>