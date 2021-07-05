<?php

use Application\core\controller\Controller;
use Application\core\controller\IBaseController;
use Application\core\exception\MyException;

class TarefaController extends Controller implements IBaseController {

	protected $tarefasModel = null;

	public function __construct() {
		$this->tarefasModel = $this->model('TarefaModel'); // é retornado o model TarefaModel()
	}

	// index == listarTodos
	public function index() {
		$data["paginaMeio"] = "tarefas/tarefaView";
		$data["dados"] = $this->tarefasModel->listarTodos();
		$this->view("PrincipalView", $data);
	}

	// Métodos padrão conhecidos como CRUD (Create, Read, Update e Delete).

	public function listar($id = 0) {
		try {
			if (is_numeric($id) && $id <= 0) {
				throw new MyException("Listar tarefa: O id da tarefa é inválido.");
			}
		} catch (MyException $error) {
			echo $error->jsonException($error);
			die();
		}

		$dados = $this->tarefasModel->listar($id);
		header('Content-Type: application/json; charset=utf-8');
		echo json_encode($dados);
		exit();
	}

	public function criar($dados = []) {
		$this->validarTarefaController($dados);

		return $this->tarefasModel->criar($dados);
	}

	public function atualizar($dados = []) {
		echo json_encode(["mensagem" => "ola mundo"]);
		exit;
	}

	public function excluir($id = 0) {
		echo json_encode(["mensagem" => "ola mundo"]);
		exit;
	}

	// Fim CRUD.

	private function validarTarefaController($dados) {
		try {
			if (empty($dados)) {
				throw new MyException("Controller: O nome da tarefa está em branco");
			}
		} catch (MyException $error) {
			echo $error->jsonException($error);
			die();
		}
	}

}
