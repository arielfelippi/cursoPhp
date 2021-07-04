<?php

namespace Application\controller;

use Application\core\controller\Controller;
use Application\models\TarefasModel;

class TarefasController extends Controller {

	protected $dadosTarefa;
	protected $tarefasModel;
	public $chamarFuncao;

	public function __construct() {
		$this->dadosTarefa = $_POST["dadosTarefa"]; // Obtém os dados enviados pelo front para o back.
		$this->chamarFuncao = $_POST["funcao"];
		$this->tarefasModel = new TarefasModel();
	}

	public function index() {
		$todasTarefas = $this->tarefasModel->listarTodos();

		return $todasTarefas;
	}

	public function listar() {
	}

	public function criar() {
		$this->validarTarefaController();

		return $this->tarefasModel->criar($this->dadosTarefa);
	}

	public function atualizar() {
		echo json_encode(["mensagem" => "ola mundo"]);
		exit;
	}

	public function excluir() {
		echo json_encode(["mensagem" => "ola mundo"]);
		exit;
	}

	public function excluirTarefasController() {
	}

	private function validarTarefaController() {
		if (empty($this->dadosTarefa["nomeDaTarefa"])) {
			throw new \Exception("Controller: O nome da tarefa está em branco");
		}
	}

}
