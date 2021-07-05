<?php

namespace Application\models;

use Application\core\database\BancoDeDados;
use Application\core\model\IBaseModel;

class TarefaModel implements IBaseModel {

	protected $bancoDeDados = null;
	protected $tabela = "tarefas";

	public function __construct() {
		$this->bancoDeDados = new BancoDeDados();
		$this->excluirTabela();
		$this->criarTabela();
	}

	private function excluirTabela() {
		$sql = (
			"DROP TABLE IF EXISTS `{$this->tabela}`"
		);

		if (in_array($this->tabela, DROP_TABLE)) {
			return $this->executar($sql);
		}
	}

	private function criarTabela() {
		$sql = (
			"CREATE TABLE IF NOT EXISTS `{$this->tabela}` (
				`id` INT AUTO_INCREMENT PRIMARY KEY,
				`titulo` VARCHAR(150) DEFAULT NULL,
				`data_inicio` DATE DEFAULT '0001-01-01',
				`data_fim` DATE DEFAULT '0001-01-01',
				`status` TINYINT NOT NULL,
				`prioridade` TINYINT NOT NULL,
				`usuario` VARCHAR(50) DEFAULT NULL,
				`description` TEXT DEFAULT NULL,
				`data_criacao` TIMESTAMP DEFAULT NULL,
				`data_atualizacao` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
				`usuario_atualizacao` VARCHAR(50) DEFAULT NULL
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;"
		);

		if (in_array($this->tabela, CREATE_TABLE)) {
			return $this->executar($sql);
		}
	}

	private function executar($sql) {
		$this->bancoDeDados->executar($sql);

		$dados = [];

		if (!is_scalar($this->bancoDeDados->resultados)) { // Só entra aqui se executou certo a a query e tiver resultado.
			$dados = $this->bancoDeDados->resultados;
		}

		return $dados;
	}

	public function listarTodos() {
		$sql = "SELECT * FROM {$this->tabela};";

		return $this->executar($sql);
	}

	// CRUD

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
