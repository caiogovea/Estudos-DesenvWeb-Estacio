<?php

echo "<h3>WHILE</h3>";

$i = 1;

while ($i <= 5) {
    echo "Número: $i<br>";
    $i++;
}

echo "<h3>FOR</h3>";

for ($i = 1; $i <= 5; $i++) {
    echo "Número: $i<br>";
}

echo "<h3>DO WHILE</h3>";

$i = 1;

do {
    echo "Número: $i<br>";
    $i++;
} while ($i <= 5);