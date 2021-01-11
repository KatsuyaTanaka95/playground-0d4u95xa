<?php

use function PHPSTORM_META\expectedArguments;

include 'helloWorld.php';
function test()
{
    $expected = "7\n2\n6\n";
    if (helloWorld() === $expected) {
        echo ("TECHIO> success true \r\n");
    } else {
        echo ("TECHIO> success false  \r\n");
        echo ("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
    }
}
test();
