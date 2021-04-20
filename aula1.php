<?php
echo "olá mundo!";

echo "<br>";

phpinfo();
// exibirDataAtual();
echo "nosso teste de conflito!";
echo "nosso teste de conflito!";
echo "nosso teste de conflito!";
echo "nosso teste de conflito!";
echo "nosso teste de conflito!";

echo "simulando um conflito";

echo " criamos o branch DEV";
/*
O comando abaixo imprime a data atual
echo - imprimir
date - data atual
"d/m/Y" - formato da data
*/
echo date("d/m/Y"); // 13/04/2021

function obterDataAtual($dataOntem = "") { // $dataOntem - "12/04/2021"

    if ($dataOntem == "") {
        throw Exception("voce nao informou a data, a data esta em branco");
    }

    if ($dataOntem != date("d/m/Y")) {
        return $dataOntem;
    }

    return date("d/m/Y");
}

function exibirDataAtual() {
    $resultado = obterDataAtual("12/04/2021");
    obterDataAtual();
}
