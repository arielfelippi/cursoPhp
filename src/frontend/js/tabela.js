// $(document).ready(function () {
// 	console.log('Ready disparado');

// 	$(".btnInserir").on("click", function () {
// 		var $botaoInserir = $(this);

// 		console.log("O botão clicado foi: ", $botaoInserir.text(), " valor: ", $botaoInserir.val());
// 		validarForm();
// 	});

// 	$(".btnEditar").on("click", function () {
// 		var $botaoEditar = $(this);

// 		console.log("O botão clicado foi: ", $botaoEditar.text(), " valor: ", $botaoEditar.val());
// 	});


// 	// Excluir Registro do Banco e da tela (Tabela)
// 	$('#tabelaTarefas').on('click', '.btnExcluir', function (e) {
// 		e.preventDefault();
// 		var $botaoExcluir = $(this);

// 		console.log("O botão clicado foi: ", $botaoExcluir.text(), " valor: ", $botaoExcluir.val());

// 		$botaoExcluir.closest('tr').remove();
// 	});

// 	// Example starter JavaScript for disabling form submissions if there are invalid fields
// 	function validarForm() {
// 		'use strict'

// 		// Fetch all the forms we want to apply custom Bootstrap validation styles to
// 		var forms = document.querySelectorAll('.needs-validation')

// 		// Loop over them and prevent submission
// 		Array.prototype.slice.call(forms)
// 			.forEach(function (form) {
// 				form.addEventListener('submit', function (event) {
// 					if (!form.checkValidity()) {
// 						event.preventDefault()
// 						event.stopPropagation()
// 					}

// 					form.classList.add('was-validated')
// 				}, false)
// 			})
// 	}
// });

$(document).ready(function () {

	var tabelaTarefas = $("#idTabelaTarefas");
	montarTabela();

	function montarTabela() {
		var cabecalho = montarCabecalhoTabela();
		var corpo = montarCorpoTabela();
		var htmlDaTabela = (cabecalho + corpo);

		tabelaTarefas.html(htmlDaTabela);
		
	}

	function montarCabecalhoTabela() {
		var cabecalho = (
			'<thead class="table-dark">' +
				'<tr>' +
					'<th scope="col">Id</th>' +
					'<th scope="col">Tarefa</th>' +
					'<th scope="col">Usuário</th>' +
					'<th scope="col">Data</th>' +
					'<th scope="col">Ações</th>' +
				'</tr>' +
			'</thead>'
		);

		return cabecalho;
	}

	function montarCorpoTabela() {
		var corpo = (
			'<tbody>' +
				'<tr>'+
					'<td>1</td>' +
					'<td>Mark</td>' +
					'<td>Otto</td>' +
					'<td>@mdo</td>' +
					'<td>' +
						'<button type="button" class="btn btn-warning btnEditar" value=1>Editar</button>' +
						'&nbsp;' +
						'<button type="button" class="btn btn-danger btnExcluir" value=1>Excluir</button>' +
					'</td>' +
				'</tr>' +
			'</tbody>'
		);

		return corpo;
	}

});
