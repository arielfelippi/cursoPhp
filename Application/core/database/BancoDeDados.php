<?php

namespace Application\core\database;

use Application\core\exception\TraitExceptionJSON;

class BancoDeDados {
	use TraitExceptionJSON;

	protected $nomeBanco = "";
	protected $objMysqli = null;
	public $resultados = [];
	public $nroDeLinhas = 0;

	public function __construct() {
		$conexaoBanco = new ConexaoBanco();

		$this->nomeBanco = $conexaoBanco->obterNomeBanco();
		$this->objMysqli = $conexaoBanco->obterConexao();
		$this->selecionarBanco();
	}

	private function selecionarBanco() {
		try {
			if (!$this->objMysqli->select_db($this->nomeBanco)) {
				$this->criarBancoDeDados();
			}
		} catch (\Exception $error) {
			echo $this->jsonException($error);
		}
	}

	private function criarBancoDeDados() {
		try {

			// Instrução SQL que cria o banco de dados se não existir
			$sql = "CREATE DATABASE IF NOT EXISTS {$this->nomeBanco}";

			if (!$this->objMysqli->query($sql)) {
				throw new \Exception("BancoDeDados: Erro ao criar banco de dados: " . mysqli_error($this->objMysqli));
			}

			$this->selecionarBanco();
		} catch (\Exception $error) {
			echo $this->jsonException($error);
		}
	}

	public function executar($sql) {
		try {
			$this->resultados = $this->objMysqli->query($sql); // mysqli_query($this->objMysqli, $sql);
			$this->nroDeLinhas = $this->resultados->num_rows(); // mysqli_num_rows($this->resultados);
		} catch (\Exception $error) {
			echo $this->jsonException($error);
		}
	}

}
