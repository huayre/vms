/* *********************************************************************************
Autor: Rawil Ceballo
Fecha: 30/10/2020
/* ******************************************************************************** */
$(document).ready(function(){
	$('#dtResultPicking').DataTable({
		responsive: true,
		destroy: true,
		filter: false,
		autoWidth: false,
		language: langSpanish,
		order: [[ 0, "asc" ]]
	});

	$('#dtResultReingreso').DataTable({
		responsive: true,
		destroy: true,
		filter: false,
		autoWidth: false,
		language: langSpanish,
		order: [[ 0, "asc" ]]
	});
});

function viewDetailsPicking(id) {
	$("#modalDetalles").modal("toggle");
	$('#dtModalDetallesPicking').DataTable({
		responsive: true,
		destroy: true,
		filter: false,
		autoWidth: false,
		language: langSpanish,
		order: [[ 0, "asc" ]]
	});
}