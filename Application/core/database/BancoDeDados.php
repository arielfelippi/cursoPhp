<?php

namespace Application\core\database;

use Application\core\exception\TraitExceptionJSON;

class BancoDeDados {
	use TraitExceptionJSON;

	protected $conexao = null;
	public $resultados = null;
	public $nroDeLinhas = 0;

	public function __construct() {
		$this->conexao = ConexaoBanco::obterConexao();
		$this->criarBancoDeDados();
	}

	private function criarBancoDeDados() {
		try {
			$nomeBanco = ConfigurarBanco::obterNomeBanco();

			// Instrução SQL que cria o banco de dados se não existir
			$sql = `CREATE DATABASE IF NOT EXISTS {$nomeBanco}`;

			if (!mysqli_query($this->conexao, $sql)) {
				throw new \Exception("BancoDeDados: Erro ao criar banco de dados: " . mysqli_error($this->conexao));
			}
		} catch (\Exception $error) {
			echo $this->jsonException($error);
		}
	}

	public function executar($sql) {
		try {
			$this->resultados = $this->conexao->query($sql); // mysqli_query($this->conexao, $sql);
			$this->nroDeLinhas = $this->resultados->num_rows(); // mysqli_num_rows($this->resultados);
		} catch (\Exception $error) {
			echo $this->jsonException($error);
		}
	}

}
