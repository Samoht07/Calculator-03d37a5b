<?php
echo "Welke operatie wil je uitvoeren? (+, -)" . PHP_EOL;
$A = readline(">");
echo "Eerste getal: " . PHP_EOL;
$B = readline(">");
echo "2e getal: "  . PHP_EOL;
$C = readline(">");

if ($A === "+") {
    echo "Uw resultaat is: " . $B += $C;
} elseif ($A === "-") {
    echo "Uw resultaat is: " . $B -= $C;
}
