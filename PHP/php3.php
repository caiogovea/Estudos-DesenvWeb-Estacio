<?php

$opcao = 2;

switch ($opcao) {
    case 1:
        echo "Você escolheu cadastrar.";
        break;

    case 2:
        echo "Você escolheu consultar.";
        break;

    case 3:
        echo "Você escolheu sair.";
        break;

    default:
        echo "Opção inválida.";
}