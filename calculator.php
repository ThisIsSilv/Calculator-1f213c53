<?php
echo "watchu wanna do (+ , -)\n";
$input = readline();
if ($input == "+") {
    echo ("First>\n");
    $a = readline();
    echo ("Second>\n");
    $b = readline();
    echo ("antwoord --->   ");
    echo ($a + $b);
}

if ($input == "-") {
    echo ("First>\n");
    $c = readline();
    echo ("Second>\n");
    $d = readline();
    echo ("antwoord --->   ");
    echo ($c - $d);
}
