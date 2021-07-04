<?php

namespace Application\core\controller;

interface IBaseController {

	public function listar();

	public function criar();

	public function atualizar();

	public function excluir();

}
