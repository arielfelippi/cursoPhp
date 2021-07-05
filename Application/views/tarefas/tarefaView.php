
<br />
<div class="container">

	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Criar
		tarefa</button>
		<?php echo $data["msg"];?>
	<br />
	<br />
	<table id="idTabelaTarefas" class="table table-responsive table-striped table-hover">
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Cadastrar tarefa</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">

				<!-- FORM DA TAREFA -->
				<form id="formTarefas" class="row g-3 needs-validation" novalidate>

					<div class="col-md-3">
						<label for="idDaTarefa" class="form-label">Id da Tarefa</label>
						<input type="number" min="1" class="form-control" id="idDaTarefa" required>
						<div class="invalid-feedback">
							Informe um id para a tarefa
						</div>
					</div>

					<div class="col-md-9">
						<label for="nomeDaTarefa" class="form-label">Nome da tarefa</label>
						<input type="text" class="form-control" id="nomeDaTarefa" required>
						<div class="invalid-feedback">
							Informe um nome para a tarefa
						</div>
					</div>

					<div class="col-md-6">
						<label for="usuarioDaTarefa" class="form-label">Usuário</label>
						<input type="text" class="form-control" id="usuarioDaTarefa" required>
						<div class="invalid-feedback">
							Informe um usuário para a tarefa
						</div>
					</div>

					<div class="col-md-6">
						<label for="dataDaTarefa" class="form-label">Data</label>
						<input type="date" class="form-control" id="dataDaTarefa" required>
						<div class="invalid-feedback">
							Informe uma data para a tarefa
						</div>
					</div>

					<div class="modal-footer col-12">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						<button type="submit" class="btn btn-primary btnInserir">Salvar</button>
					</div>
				</form>
				<!-- FIM DO FORM -->

			</div>
		</div>
	</div>
</div>
<script src="/assets/js/tarefas/tarefas.js"></script>