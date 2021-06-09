<?php

// $phpinput = file_get_contents("php://input");

// echo json_encode($phpinput);

// exit();

$dadosTarefa = $_POST; // ' '
// var_dump($dadosTarefa);
// $estaSetadoONome = isset($nomeTarefa); // ('' em branco/vazio | undefined | null) -> falso


// if ($estaSetadoONome) {
//     $dadosTarefa = $nomeTarefa;
// } else  {
//     $dadosTarefa =  null;
// }


// $dadosTarefa = isset($_POST['nomeDaTarefa']) ? $_POST['nomeDaTarefa'] : null;

// header('Content-Type: application/json');
echo json_encode($dadosTarefa);

exit();
