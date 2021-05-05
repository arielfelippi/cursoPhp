<?php

require_once "../models/PessoaModel.class.php";

class PessoaController {

	private $variavelPessoaModel;

    public function __construct() {
        $this->variavelPessoaModel = new PessoaModel();
    }

    public function obterDadosPessoa() {
        $arrayDados = $this->variavelPessoaModel->retornarDados();
        echo json_encode($arrayDados);
    }
}


$pessoaController = new PessoaController();

echo $pessoaController->obterDadosPessoa();

exit();
