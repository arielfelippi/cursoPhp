<?php

namespace Application\core\controller;

use Application\core\controller\IBaseController;
use Application\models\Users;

/**
* Esta classe é responsável por instanciar um model e chamar a view correta
* passando os dados que serão usados.
*/
class Controller implements IBaseController {

	/**
	* Este método é responsável por chamar uma determinada view (página).
	*
	* @param  string  $model   É o model que será instanciado para usar em uma view, seja seus métodos ou atributos
	*/
	public function model($model) {
		require '../Application/models/' . $model . '.php';
		$classe = 'Application\\models\\' . $model;
		return new $classe();
	}

	/**
	* Este método é responsável por chamar uuma determinada view (página).
	*
	* @param  string  $view   A view que será chamada (ou requerida)
	* @param  array   $data   São os dados que serão exibido na view
	*/
	public function view(string $view, $data = []) {
		require '../Application/views/' . $view . '.php';
	}

	/**
	* Este método é herdado para todas as classes filhas que o chamaram quando
	* o método ou classe informada pelo usuário nçao forem encontrados.
	*/
	public function pageNotFound() {
		$this->view('erro404');
	}

	// Métodos padrão conhecidos como CRUD (Create, Read, Update e Delete).

	public function listar() {
	}

	public function criar() {
	}

	public function atualizar() {
	}

	public function excluir() {
	}

}
