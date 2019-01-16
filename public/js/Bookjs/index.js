$(function () {

	$('#tabelaLivros').DataTable({
		"responsive":true,
		"columnDefs":
		[
		{ "orderable": false, "targets": 3 },
		{responsivePriority:1,targets:0},
		{responsivePriority:2,targets:1},
		{responsivePriority:3,targets:2}
		],
		"paging": true,
		"lengthChange": true,
		"searching": true,
		"ordering":true,
		"info": true,
		"autoWidth": false,
		"language": {
			"sProcessing":    "Procesando...",
			"sLengthMenu":    "Mostrar _MENU_ Livros",
			"sZeroRecords":   "Nenhuma Livro encontrado",
			"sEmptyTable":    "Nenhuma Livro cadastrado",
			"sInfo":          "Livros de _START_ a _END_ de um total de _TOTAL_ Livros",
			"sInfoEmpty":     "Livros de 0 a 0 de um total de 0 Livros",
			"sInfoFiltered":  "",
			"sInfoPostFix":   "",
			"sSearch":        "Procurar:",
			"sUrl":           "",
			"sInfoThousands":  ",",
			"sLoadingRecords": "Carregando...",
			"oPaginate": {
				"sFirst":    "Primero",
				"sLast":    "Último",
				"sNext":    "Próximo",
				"sPrevious": "Voltar"
			},
			"oAria": {
				"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
				"sSortDescending": ": Activar para ordenar la columna de manera descendente"
			}
		}
	});

});

