<?php

namespace Application\models;

use Application\core\database\BancoDeDados;
use Application\core\model\IBaseModel;

class TarefaModel implements IBaseModel {

	protected $bancoDeDados = null;
	protected $tabela = "tarefas";

	public function __construct() {
		$this->bancoDeDados = new BancoDeDados();
	}

	private function executar($sql) {
		$this->bancoDeDados->executar($sql);

		$dados = [];

		if ($this->bancoDeDados->resultados) { // Só entra aqui se executou certo a a query e tiver resultado.
			$dados = $this->bancoDeDados->resultados;
		}

		return $dados;
	}

	public function listarTodos() {
		$sql = "SELECT * FROM {$this->tabela};";

		return $this->executar($sql);
	}

	public function listar($id) {
		$sql = "SELECT * FROM {$this->tabela} WHERE id= {$id};";

		return $this->executar($sql);
	}

	public function excluir($id) {
		$sql = "DELETE FROM {$this->tabela} WHERE id= {$id};";

		return $this->executar($sql);
	}

	public function criar($dadosTarefa) {
	}

	public function atualizar($dadosTarefa) {
	}

}
