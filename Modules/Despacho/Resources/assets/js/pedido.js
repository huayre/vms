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
		order: [[ 0, "asc" ]]
	});

	$("#btn-pedido").click(function(){
		var	pedido = $(this).val();
		/* Consultar los detalles del pedido */

		$("#modalAI").modal("toggle");
	});
});

function viewDetails(id) {
	$("#btn-pedido").val(id);
	$("#modalDetalles").modal("toggle");
}

function editItem(id){
	$("#linea-"+id).removeAttr('readonly');
	$("#actionEdit-"+id).hide('fast');
	$("#actionDelete-"+id).hide('fast');
	$("#actionUpdate-"+id).removeClass('d-none');
	$("#actionRedo-"+id).removeClass('d-none');
}

function redoItem(id){
	$("#linea-"+id).attr({'readonly':'readonly'});
	$("#linea-"+id).val( $("#lineaVa-"+id).val() );
	$("#actionUpdate-"+id).addClass('d-none');
	$("#actionRedo-"+id).addClass('d-none');
	$("#actionEdit-"+id).show('fast');
	$("#actionDelete-"+id).show('fast');
}

function trashItem(id) {
	Swal.fire({
		icon: "question",
		title: "¿Esta seguro eliminar el articulo?",
		html: "<b class='text-danger'>Debe confirmar esta acción</b>",
		showConfirmButton: true,
		showCancelButton: true,
		confirmButtonText: "Aceptar",
		cancelButtonText: "Cancelar"
	}).then(result => {
		if (result.value) {
			$("#linea-"+id).parent().parent().parent().remove();
			Swal.fire({
				icon: "success",
				title: "Completado.",
				showConfirmButton: true,
				timer: 4000
			});
		}
	});
}

function updateItem(id){
	Swal.fire({
		icon: "question",
		title: "¿Esta seguro de aplicar el cambio?",
		html: "<b class='text-danger'>Debe confirmar esta acción</b>",
		showConfirmButton: true,
		showCancelButton: true,
		confirmButtonText: "Aceptar",
		cancelButtonText: "Cancelar"
	}).then(result => {
		
		$("#linea-"+id).attr({'readonly':'readonly'});
		$("#actionUpdate-"+id).addClass('d-none');
		$("#actionRedo-"+id).addClass('d-none');
		$("#actionEdit-"+id).show('fast');
		$("#actionDelete-"+id).show('fast');

		if (result.value) {
			Swal.fire({
				icon: "success",
				title: "Completado.",
				showConfirmButton: true,
				timer: 4000
			});
		}
		else{
			$("#linea-"+id).val( $("#lineaVa-"+id).val() );
		}
	});
}

function saveItem(id){
	Swal.fire({
		icon: "question",
		title: "¿Esta seguro de aplicar el cambio?",
		html: "<b class='text-danger'>Debe confirmar esta acción</b>",
		showConfirmButton: true,
		showCancelButton: true,
		confirmButtonText: "Aceptar",
		cancelButtonText: "Cancelar"
	}).then(result => {
		if (result.value) {
			$("#formAI")[0].reset();
			Swal.fire({
				icon: "success",
				title: "Completado.",
				showConfirmButton: true,
				timer: 4000
			});
		}
	});
}