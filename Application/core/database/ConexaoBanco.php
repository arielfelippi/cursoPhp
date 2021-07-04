<?php

namespace backend\database;

use backend\exception\TraitExceptionJSON;

class ConexaoBanco {
	use TraitExceptionJSON;

	protected $conexao = null;

	public function __construct() {
		$this->conectar();
	}

	private function conectar() {
		try {

			// Criar conexão
			$this->conexao = new \mysqli(
				ConfigurarBanco::obterNomeServidor(),
				ConfigurarBanco::obterNomeUsuario(),
				ConfigurarBanco::obterSenhaUsuario(),
				"",
				ConfigurarBanco::obterPorta()
			);

			if ($this->conexao->connect_error) {
				throw new \Exception("ConexaoBanco: Conexão falhou: " . $this->conexao->connect_error);
			}
		} catch (\Exception $error) {
			echo $this->jsonException($error);
		}
	}

	public function fecharConexao() {
		try {
			mysqli_close($this->conexao);
		} catch (\Exception $error) {
			echo $this->jsonException($error);
		}
	}

	public static function obterConexao() {
		return self::$conexao;
	}

}
