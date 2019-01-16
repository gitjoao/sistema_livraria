$(function () {

	$('#tabelaAtores').DataTable({
		"responsive":true,
		"columnDefs":
		[
		{ "orderable": false, "targets": 2 },
		{responsivePriority:1,targets:0},
		{responsivePriority:2,targets:1}
		],
		"paging": true,
		"lengthChange": true,
		"searching": true,
		"ordering":true,
		"info": true,
		"autoWidth": false,
		"language": {
			"sProcessing":    "Procesando...",
			"sLengthMenu":    "Mostrar _MENU_ Autores",
			"sZeroRecords":   "Nenhum Autor encontrado",
			"sEmptyTable":    "Nenhum Autor cadastrado",
			"sInfo":          "Autores de _START_ a _END_ de um total de _TOTAL_ Autores",
			"sInfoEmpty":     "Autores de 0 a 0 de um total de 0 Autores",
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

