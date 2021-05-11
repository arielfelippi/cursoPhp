<?php

include __DIR__ . "../../models/PessoaModel.php";

class PessoaController {

	private $variavelPessoaModel;

    public function __construct() {
        $this->variavelPessoaModel = new PessoaModel();
    }

    public function obterDadosPessoa() {
        $arrayDados = $this->variavelPessoaModel->retornarDados();
        return $arrayDados;
    }
}

