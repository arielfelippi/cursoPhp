<?php

require_once "../models/TarefasModel.php"; // importar o arquivo

class TarefasController {

    public function obterTarefas() {
        // return { idDaTarefa: 3, nomeDaTarefa: "tarefa1", usuarioDaTarefa: "ariel", dataDaTarefa: "18/05/2021" };
    }

    public function cadastrarTarefas() {

        $dadosTarefa = $_POST; // ' '

        $this->validarTarefa($dadosTarefa);

        $dadosTarefa = [];

        $tarefasModel = new TarefasModel();
        $tarefasModel->cadastrarTarefasModel($dadosTarefa);
        // mais logicas de codigo

    }

    private function validarTarefa($dadosTarefa = []) {
        if (empty($dadosTarefa["nomeDaTarefa"])) {
            throw new Exception("O nome da tarefa está em branco");
        }
    }
}

$tarefa = new TarefasController();

$tarefa->cadastrarTarefas();
