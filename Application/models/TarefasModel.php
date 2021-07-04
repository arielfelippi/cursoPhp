<?php

namespace backend\models;

use backend\core\model\IBaseModel;
use backend\database\ConexaoBanco;

class TarefasModel implements IBaseModel {

	protected $conexao = null;

	public function __construct() {
		$this->conexao = ConexaoBanco::obterConexao();
	}

	public function listar($id) {
	}

	public function criar($dadosTarefa) {
	}

	public function atualizar($dadosTarefa) {
	}

	public function excluir($id) {
	}

	public function listarTodos() {
		$smt = $this->conexao->prepare("SELECT * FROM tarefas");

		return $smt->rowCount();
	}

}
