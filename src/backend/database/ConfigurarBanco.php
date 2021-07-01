<?php

namespace backend\database;

class ConfigurarBanco {

	protected $nomeServidor;
	protected $nomeUsuario;
	protected $senhaUsuario;
	protected $nomeBanco;
	protected $porta;

	private function __construct() {
		$this->nomeServidor = "localhost";
		$this->nomeUsuario = "mariadb";
		$this->senhaUsuario = "asdf000";
		$this->nomeBanco = "cursoPhp";
		$this->porta = "3306";
	}

	public static function obterNomeServidor() {
		return self::$nomeServidor;
	}

	public static function obterNomeUsuario() {
		return self::$nomeUsuario;
	}

	public static function obterSenhaUsuario() {
		return self::$senhaUsuario;
	}

	public static function obterNomeBanco() {
		return self::$nomeBanco;
	}

	public static function obterPorta() {
		return self::$porta;
	}

}
