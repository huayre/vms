/* *********************************************************************************
Autor: Rawil Ceballo
Fecha: 30/10/2020
/* ******************************************************************************** */
$(document).ready(function () {
	/* Vista stock por articulo */
	$('#dtResultStock').DataTable({
		responsive: true,
		destroy: true,
		filter: false,
		autoWidth: false,
		language: langSpanish,
		order: [[0, "asc"]]
	});

	$("#imprimirSTA").click(function () {
		Swal.fire({
			icon: "info",
			title: "Imprimiendo.",
			showConfirmButton: true,
			timer: 4000
		});
	});

	/* Vista stock General */
	$('#dtResultStockGeneral').DataTable({
		responsive: true,
		destroy: true,
		filter: false,
		autoWidth: true,
		language: langSpanish,
		order: [[0, "asc"]]
	});

	$("#imprimirSTG").click(function () {
		Swal.fire({
			icon: "info",
			title: "Imprimiendo.",
			showConfirmButton: true,
			timer: 4000
		});
	});

	/* Ubicacion disponible */
	$('#dtResultUBD').DataTable({
		responsive: true,
		destroy: true,
		filter: false,
		autoWidth: true,
		language: langSpanish,
		order: [[0, "asc"]]
	});

	/* Ubicacion usadas */
	$('#dtResultUBU').DataTable({
		responsive: true,
		destroy: true,
		filter: false,
		autoWidth: true,
		language: langSpanish,
		order: [[0, "asc"]]
	});

	/* Ubicacion por articulos */
	$('#dtResultUBA').DataTable({
		responsive: true,
		destroy: true,
		filter: false,
		autoWidth: true,
		language: langSpanish,
		order: [[0, "asc"]]
	});

	/* Cuenta corriente por articulos */
	$('#dtResultCTAA').DataTable({
		responsive: true,
		destroy: true,
		filter: false,
		autoWidth: true,
		language: langSpanish,
		order: [[0, "asc"]]
	});

	/* Cuenta corriente por ubicaciones */
	$('#dtResultCTAU').DataTable({
		responsive: true,
		destroy: true,
		filter: false,
		autoWidth: true,
		language: langSpanish,
		order: [[0, "asc"]]
	});

	/* Cuenta corriente por cliente */
	$('#dtResultCTAC').DataTable({
		responsive: true,
		destroy: true,
		filter: false,
		autoWidth: true,
		language: langSpanish,
		order: [[0, "asc"]]
	});

});