<?php

namespace Application\core\exception;

trait TraitExceptionJSON {

	public function jsonException(\Exception $error) {
		return json_encode([
			'message' => $error->getMessage(),
			'code' => $error->getCode(),
			'file' => $error->getFile(),
			'line' => $error->getLine(),
			'trace' => $error->getTrace()
		]);
	}

}
