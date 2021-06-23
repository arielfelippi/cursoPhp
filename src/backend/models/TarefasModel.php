<?php

// require_once "../database/ConexaoBanco.php";

class TarefasModel {

    public function cadastrarTarefasModel($dadosTarefa = []) {

        if (empty($dadosTarefa)) { // se ta vazio ou não passou parametro retorno erro.
            throw new Exception("Model: O array de dados da tarefa está em branco");
        }

        // criar a logica para salvar os dados no banco

    }
}
