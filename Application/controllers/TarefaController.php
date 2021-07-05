<?php

use Application\core\controller\Controller;
use Application\core\controller\IBaseController;
use Application\core\exception\MyException;

class TarefaController extends Controller implements IBaseController {

	protected $tarefasModel = null;

	public function __construct() {
		$this->tarefasModel = $this->model('TarefaModel'); // é retornado o model TarefaModel()
	}

	public function index() { // index == listarTodos
		$data = $this->tarefasModel->listarTodos();
		$this->view('tarefas/tarefaView', $data);
	}

	// Métodos padrão conhecidos como CRUD (Create, Read, Update e Delete).

	public function listar($id = 0) {
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
