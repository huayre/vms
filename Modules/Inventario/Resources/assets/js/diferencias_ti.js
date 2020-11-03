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

	$("#bodegaCTI").change(function () {
		id = $(this).val();

		if (id != "") {
			$("#modalInv").modal("toggle");
		}
		else {
			$("#bodegaCTI").val('');
			$("#codigoInvCTI").val('');
			$("#fechaInvCreaCTI").val('');
			$("#fechaInvIniCTI").val('');
			$("#fechaInvFinCTI").val('');
			$("#tipoInvCTI").val('');
			$("#respInvCTI").val('');
			$("#estadoInvCTI").val('');
		}
	});

	$("#imprimirCTI").click(function () {
		Swal.fire({
			icon: "info",
			title: "Imprimiendo detalles",
			showConfirmButton: true,
			timer: 8000
		});
	});

	$("#reconteoCTI").click(function () {
		Swal.fire({
			icon: "question",
			title: "¿Desea cambiar el estado del inventario a reconteo?",
			html: "<b class='text-danger'>Debe confirmar esta acción.</b>",
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
});

function select_inv(id) {
	$("#codigoInvCTI").val(id);
	$("#fechaInvCreaCTI").val('2020-11-03');
	$("#fechaInvIniCTI").val('2020-11-03');
	$("#fechaInvFinCTI").val('2020-11-03');
	$("#tipoInvCTI").val('General');
	$("#respInvCTI").val('Almacenista');
	$("#estadoInvCTI").val('Inventariado');
	$("#modalInv").modal("hide");
}