/* *********************************************************************************
Autor: Rawil Ceballo
Fecha: 30/10/2020
/* ******************************************************************************** */
$(document).ready(function () {
	$('#dtResultXTekMims').DataTable({
		responsive: true,
		destroy: true,
		filter: false,
		autoWidth: false,
		language: langSpanish,
		order: [[0, "asc"]]
	});

	$("#imprimirXT").click(function () {
		Swal.fire({
			icon: "info",
			title: "Imprimiendo detalles",
			showConfirmButton: true,
			timer: 8000
		});
	});
});