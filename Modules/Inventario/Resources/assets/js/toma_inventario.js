/* *********************************************************************************
Autor: Rawil Ceballo
Fecha: 30/10/2020
/* ******************************************************************************** */
$(document).ready(function () {
	$('#dtResultIndex').DataTable({
		responsive: true,
		destroy: true,
		filter: false,
		autoWidth: false,
		language: langSpanish,
		order: [[0, "asc"]]
	});

	$("#nuevoCTI").click(function () {
		$("#modalTI").modal("toggle");
	});

	$("#bodegaCTI").change(function () {
		id = $(this).val();

		if (id != "") {
			$("#modalInv").modal("toggle");
		}
		else{
			$("#bodegaCTI").val('');
			$("#codigoInvCTI").val('');
		}
	});

	$("#actualizarCTI").click(function () {
		Swal.fire({
			icon: "question",
			title: "¿Esta seguro de actualizar el inventario?",
			html: "<b class='text-danger'>Debe confirmar esta acción</b>",
			showConfirmButton: true,
			showCancelButton: true,
			confirmButtonText: "Aceptar",
			cancelButtonText: "Cancelar"
		}).then(result => {
			if (result.value) {
				Swal.fire({
					icon: "success",
					title: "Completado.",
					showConfirmButton: true,
					timer: 4000
				});
			}
		});
	});

	$("#imprimirCTI").click(function () {
		Swal.fire({
			icon: "info",
			title: "Imprimiendo detalles",
			showConfirmButton: true,
			timer: 8000
		});
	});
});

function guardar() {
	Swal.fire({
		icon: "question",
		title: "¿Esta seguro de crear el inventario?",
		html: "<b class='text-danger'></b>",
		showConfirmButton: true,
		showCancelButton: true,
		confirmButtonText: "Aceptar",
		cancelButtonText: "Cancelar"
	}).then(result => {
		if (result.value) {
			$("#formTI")[0].reset();
			Swal.fire({
				icon: "success",
				title: "Completado.",
				showConfirmButton: true,
				timer: 4000
			});
		}
	});
}

function select_inv(id) {
	$("#codigoInvCTI").val(id);
	$("#modalInv").modal("hide");
}