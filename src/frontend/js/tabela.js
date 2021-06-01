$(document).ready(function () {

	var dadosTarefasAtual = dadosTabela(); // Inicializando com todos os dados
	var tabelaTarefas = $("#idTabelaTarefas");
	montarTabela();


	$(".btnInserir").on("click", function () {
		var $botaoInserir = $(this);

		console.log("O botão clicado foi: ", $botaoInserir.text(), " valor: ", $botaoInserir.val());
		validarForm();
	});


	$(".btnEditar").on("click", function () {
		var $botaoEditar = $(this);

		console.log("O botão clicado foi: ", $botaoEditar.text(), " valor: ", $botaoEditar.val());
	});

	$('#idTabelaTarefas').on('click', '.btnExcluir', function (e) {
		e.preventDefault();
		var $botaoExcluir = $(this);

		console.log("O botão clicado foi: ", $botaoExcluir.text(), " valor: ", $botaoExcluir.val());

		var novosDados = [];

		$.each(dadosTarefasAtual, function(idx, tarefa) {
			if (tarefa.id != $botaoExcluir.val()) {
				novosDados.push(tarefa);
				// tarefa = { id: 3, nome: "tarefa1", usuario: "ariel", data: "18/05/2021" }
			}
		});

		dadosTarefasAtual = novosDados;
		montarTabela();

		// $botaoExcluir.closest('tr').remove();
	});


	function dadosTabela() {
		var dadosTarefa = [];

		dadosTarefa = [ 
			{ id: 3, nome: "tarefa1", usuario: "ariel", data: "18/05/2021" },
			{ id: 4, nome: "tarefa2", usuario: "tiago", data: "18/05/2021" },
			{ id: 5, nome: "tarefa3", usuario: "sadi", data: "18/05/2021" },
			{ id: 6, nome: "tarefa4", usuario: "michel", data: "25/05/2021" },
			{ id: 7, nome: "tarefa5", usuario: "gabriel", data: "25/05/2021" },
		];

		return dadosTarefa;
	}

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
		var corpo = '<tbody>';
		var tarefas = dadosTarefasAtual;

		$.each(tarefas,  function(idx, tarefa) {
			corpo += (
			'<tr>'+
				'<td>' + tarefa.id+ '</td>' +
				'<td>' + tarefa.nome+ '</td>' +
				'<td>' + tarefa.usuario+ '</td>' +
				'<td>' + tarefa.data+ '</td>' +
				'<td>' +
					'<button type="button" class="btn btn-warning btnEditar" value=' + tarefa.id+ '>Editar</button>' +
					'&nbsp;' +
					'<button type="button" class="btn btn-danger btnExcluir" value=' + tarefa.id+ '>Excluir</button>' +
				'</td>' +
			'</tr>'
			);
		});

		corpo += '</tbody>';
		
		return corpo;
	}

	// Example starter JavaScript for disabling form submissions if there are invalid fields
	function validarForm() {
		'use strict'

		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		var forms = document.querySelectorAll('.needs-validation')

		// Loop over them and prevent submission
		Array.prototype.slice.call(forms)
			.forEach(function (form) {
				form.addEventListener('submit', function (event) {
					if (!form.checkValidity()) {
						event.preventDefault()
						event.stopPropagation()
					}

					form.classList.add('was-validated')
				}, false)
			})
	}

});
