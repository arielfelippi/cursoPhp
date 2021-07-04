<?php

require_once "../../frontend/view/index.php";

use backend\core\controller\IBaseController;
use backend\models\TarefasModel;

class TarefasController implements IBaseController {

	protected $dadosTarefa;
	protected $tarefasModel;
	public $chamarFuncao;

	public function __construct() {
		$this->dadosTarefa = $_POST["dadosTarefa"]; // Obtém os dados enviados pelo front para o back.
		$this->chamarFuncao = $_POST["funcao"];
		$this->tarefasModel = new TarefasModel();
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

	public function listarTodos() {
		$todasTarefas = $this->tarefasModel->listarTodos();

		return $todasTarefas;
	}

	public function excluirTarefasController() {
	}

	private function validarTarefaController() {
		if (empty($this->dadosTarefa["nomeDaTarefa"])) {
			throw new Exception("Controller: O nome da tarefa está em branco");
		}
	}

}

$tarefa = new TarefasController();

switch ($tarefa->chamarFuncao) {
	case "listarTodos":
		return $tarefa->listarTodos();
		break;
	case "criar":
		return $tarefa->criar();
		break;
	case "atualizar":
		return $tarefa->atualizar();
		break;
	case "excluir":
		return $tarefa->excluir();
		break;
	default: echo json_encode(["mensagem" => "Função não existe!"]);
		break;
}

unset($tarefa);
