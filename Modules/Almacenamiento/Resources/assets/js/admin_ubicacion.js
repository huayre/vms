/* *********************************************************************************
Autor: Rawil Ceballo
Fecha: 30/10/2020
/* ******************************************************************************** */
$(document).ready(function () {

	formatDT();

	$("#bodegaAU").change(function () {
		id = $(this).val();
		$('#dtResultIndex').DataTable().destroy();
		if (id != "") {
			contenido = '<tr>' +
				'	<td>COD. UBICACIÓN</td>' +
				'	<td>HILERA</td>' +
				'	<td>COLUMNA</td>' +
				'	<td>NIVEL</td>' +
				'	<td>NOMBRE ALMACENAJE</td>' +
				'	<td>NOMBRE ZONA</td>' +
				'	<td>COMPARTE ALMACENAJE</td>' +
				'	<td>ESTADO</td>' +
				'	<td> <button type="button" class="btn btn-info" onclick="editar(id)"><i class="fas fa-edit"></i></button> </td>' +
				'	<td> <button type="button" class="btn btn-danger" onclick="eliminar(id)"><i class="fas fa-trash"></i></button> </td>' +
				'</tr>';
			$("#dtResultIndex .details").html(contenido);
		}
		else {
			$("#dtResultIndex .details").html('');
		}
		formatDT();
	});

	$("#nuevoAU").click(function () {
		$("#zonaUF").removeAttr('disabled');
		$("#tipoUbicUF").removeAttr('disabled');
		$("#columnaUF").removeAttr('disabled');
		$("#naveUF").removeAttr('readonly');
		$("#hileraUF").removeAttr('readonly');
		$("#nivelUF").removeAttr('readonly');
		$("#codigoUF").removeAttr('readonly');
		$("#formUF")[0].reset();

		$("#modalUF").modal("toggle");
	});
});

function formatDT() {
	$('#dtResultIndex').DataTable({
		responsive: true,
		destroy: true,
		filter: false,
		autoWidth: false,
		language: langSpanish,
		order: [[0, "asc"]]
	});
}


function editar(id) {
	$("#zonaUF").attr({'disabled':'disabled'});
	$("#tipoUbicUF").attr({'disabled':'disabled'});
	$("#columnaUF").attr({'disabled':'disabled'});
	$("#naveUF").attr({'readonly':'readonly'});
	$("#hileraUF").attr({'readonly':'readonly'});
	$("#nivelUF").attr({'readonly':'readonly'});
	$("#codigoUF").attr({'readonly':'readonly'});

	$("#zonaUF").val('2');
	$("#tipoUbicUF").val('2');
	$("#columnaUF").val('2');
	$("#naveUF").val('2');
	$("#hileraUF").val('2');
	$("#nivelUF").val('2');
	$("#codigoUF").val('2');
	$("#bodegaUF").val('2');
	$("#compartirUF").val('1');
	$("#tipoZonaUF").val('2');
	$("#estadoUbicacionUF").val('2');

	$("#modalUF").modal("toggle");
}

function eliminar(id) {
	Swal.fire({
		icon: "question",
		title: "¿Esta seguro eliminar esta ubicación?",
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
}

function guardar(id) {
	Swal.fire({
		icon: "question",
		title: "¿Esta seguro de guardar el registro?",
		html: "<b class='text-danger'></b>",
		showConfirmButton: true,
		showCancelButton: true,
		confirmButtonText: "Aceptar",
		cancelButtonText: "Cancelar"
	}).then(result => {
		if (result.value) {
			$("#formUF")[0].reset();
			Swal.fire({
				icon: "success",
				title: "Completado.",
				showConfirmButton: true,
				timer: 4000
			});
		}
	});
}