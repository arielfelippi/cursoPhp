<?php

class PessoaModel {
    private $dados = [];

    public function retornarDados() {
        $this->dados = [
            "nome" => "Ariel",
            "sobrenome" => "Felippi",
            "idade" => 20,
            "endereco" => [
                "rua" => "R. do joao canabrava",
                "bairro" => "centro"
             ]
        ];

        return $this->dados;
    }
}
