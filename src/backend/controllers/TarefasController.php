<?php

require_once "../../frontend/view/index.php";

class TarefasController {

	protected $tarefasModel;

	public function __construct() {
		$this->tarefasModel = new TarefasModel();
	}

	public function obterTarefas() {
	}

	public function cadastrarTarefasController() {
		$dadosTarefa = $_POST; // Obtém os dados enviados pelo front para o back.

		$this->validarTarefa($dadosTarefa);

		return $this->tarefasModel->cadastrarTarefasModel($dadosTarefa);
	}

	private function validarTarefa($dadosTarefa = []) {
		if (empty($dadosTarefa["nomeDaTarefa"])) {
			throw new Exception("Controller: O nome da tarefa está em branco");
		}
	}

}

$tarefa = new TarefasController();

$tarefa->cadastrarTarefasController();
