<?php

$idade = 20;

if ($idade >= 18) {
    echo "Maior de idade, obrigatório votar.";
} elseif ($idade >= 16) {
    echo "Pode votar opcionalmente.";
} else {
    echo "Menor de idade, impedido de votar";
}