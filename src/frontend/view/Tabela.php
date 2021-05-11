<?php
	require_once __DIR__ . "../../../backend/controllers/PessoaController.php";

	$pessoaController = new PessoaController();
	$dadosTarefa = $pessoaController->obterDadosPessoa();
?>
<br/>
<div class="container">

	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Criar tarefa</button>
	<br/>
	<br/>
	<table id="tabelaTarefas" class="table table-responsive table-striped table-hover">
		<thead class="table-dark">
			<tr>
			<th scope="col">Id</th>
			<th scope="col">Tarefa</th>
			<th scope="col">Usuário</th>
			<th scope="col">Data</th>
			<th scope="col">Ações</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Mark</td>
				<td>Otto</td>
				<td>@mdo</td>
				<td>
					<button type="button" class="btn btn-warning btnEditar" value=1>Editar</button>
					&nbsp;
					<button type="button" class="btn btn-danger btnExcluir" value=1>Excluir</button>
				</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Jacob</td>
				<td>Thornton</td>
				<td>@fat</td>
				<td>
					<button type="button" class="btn btn-warning btnEditar" value=2>Editar</button>
					&nbsp;
					<button type="button" class="btn btn-danger btnExcluir" value=2>Excluir</button>
				</td>
			</tr>
			<tr>
				<td>3</td>
				<td colspan="2">Larry the Bird</td>
				<td>@twitter</td>
				<td>
					<button type="button" class="btn btn-warning btnEditar" value=3>Editar</button>
					&nbsp;
					<button type="button" class="btn btn-danger btnExcluir" value=3>Excluir</button>
				</td>
			</tr>
		</tbody>
	</table>
</div>
<script src="../js/tabela.js"></script>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

		<form class="row g-3 needs-validation" novalidate>
			<div class="col-md-4">
				<label for="validationCustom01" class="form-label">First name</label>
				<input type="text" class="form-control" id="validationCustom01" value="Mark" required>
				<div class="valid-feedback">
				Looks good!
				</div>
			</div>
			<div class="col-md-4">
				<label for="validationCustom02" class="form-label">Last name</label>
				<input type="text" class="form-control" id="validationCustom02" value="Otto" required>
				<div class="valid-feedback">
				Looks good!
				</div>
			</div>
			<div class="col-md-4">
				<label for="validationCustomUsername" class="form-label">Username</label>
				<div class="input-group has-validation">
				<span class="input-group-text" id="inputGroupPrepend">@</span>
				<input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
				<div class="invalid-feedback">
					Please choose a username.
				</div>
				</div>
			</div>
			<div class="col-md-6">
				<label for="validationCustom03" class="form-label">City</label>
				<input type="text" class="form-control" id="validationCustom03" required>
				<div class="invalid-feedback">
				Please provide a valid city.
				</div>
			</div>
			<div class="col-md-3">
				<label for="validationCustom04" class="form-label">State</label>
				<select class="form-select" id="validationCustom04" required>
				<option selected disabled value="">Choose...</option>
				<option>...</option>
				</select>
				<div class="invalid-feedback">
				Please select a valid state.
				</div>
			</div>
			<div class="col-md-3">
				<label for="validationCustom05" class="form-label">Zip</label>
				<input type="text" class="form-control" id="validationCustom05" required>
				<div class="invalid-feedback">
				Please provide a valid zip.
				</div>
			</div>
			<div class="col-12">
				<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
				<label class="form-check-label" for="invalidCheck">
					Agree to terms and conditions
				</label>
				<div class="invalid-feedback">
					You must agree before submitting.
				</div>
				</div>
			</div>
			<div class="modal-footer col-12">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-primary btnInserir">Salvar</button>
			</div>
		</form>

      </div>
    </div>
  </div>
</div>

<?php
	var_dump($dadosTarefa);
?>
