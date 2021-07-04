<?php

namespace backend\database;

use backend\exception\TraitExceptionJSON;

class BancoDeDados {
	use TraitExceptionJSON;

	public function __construct() {
		$this->criarBancoDeDados();
	}

	private function criarBancoDeDados() {
		try {
			$nomeBanco = ConfigurarBanco::obterNomeBanco();

			// Instrução SQL que cria o banco de dados se não existir
			$sql = "CREATE DATABASE IF NOT EXISTS {$nomeBanco}";

			if (!mysqli_query(ConexaoBanco::obterConexao(), $sql)) {
				echo "BancoDeDados: Erro ao criar banco de dados: " . mysqli_error(ConexaoBanco::obterConexao());
			}
		} catch (\Exception $error) {
			echo $this->jsonException($error);
		}
	}

}
