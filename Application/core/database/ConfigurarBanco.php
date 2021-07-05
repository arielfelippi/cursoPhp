<?php

namespace Application\core\database;

class ConfigurarBanco {

	protected $nomeServidor;
	protected $nomeUsuario;
	protected $senhaUsuario;
	protected $nomeBanco;
	protected $porta;

	public function __construct() {
		$this->nomeServidor = "localhost";
		$this->nomeUsuario = "root";
		$this->senhaUsuario = "";
		$this->nomeBanco = "cursoPhp";
		$this->porta = 3306;
	}

	public function obterNomeServidor() {
		return $this->nomeServidor;
	}

	public function obterNomeUsuario() {
		return $this->nomeUsuario;
	}

	public function obterSenhaUsuario() {
		return $this->senhaUsuario;
	}

	public function obterNomeBanco() {
		return $this->nomeBanco;
	}

	public function obterPorta() {
		return $this->porta;
	}

}
