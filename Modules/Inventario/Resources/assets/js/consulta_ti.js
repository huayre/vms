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
		else{
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

function view_articulo(inventario, articulo) {
	// Obtiene ubicaciones y detalles del producto
	$("#skuMDT").val('1258784158');
	$("#articuloMDT").val('UN ARTÍCULO AGREGADO');
	$("#modalDetalle").modal("toggle");
}

function delete_articulo(inventario, ubicacion, articulo) {
	Swal.fire({
		icon: "question",
		title: "¿Esta seguro de eliminar el movimiento?",
		html: "<b class='text-danger'>Esta acción no se puede deshacer.</b>",
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
}