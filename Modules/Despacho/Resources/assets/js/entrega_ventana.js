/* *********************************************************************************
Autor: Rawil Ceballo
Fecha: 30/10/2020
/* ******************************************************************************** */
$(document).ready(function(){
	$('#dtResultIndex').DataTable({
		responsive: true,
		destroy: true,
		filter: false,
		autoWidth: false,
		language: langSpanish,
		order: [[ 0, "asc" ]]
	});

	$("#despachoEV").click(function(){
		$("#modalEVP").modal("toggle");
	});
});

function despachar(){
	Swal.fire({
		icon: "question",
		title: "Despacho",
		html: "<b class='text-dark'>Despacha el pedido completo.</b>",
		showConfirmButton: true,
		showCancelButton: true,
		confirmButtonText: "Si",
		cancelButtonText: "No"
	}).then(result => {
		if (result.value) {
			$("#formEVP")[0].reset();
			Swal.fire({
				icon: "success",
				title: "Despachado.",
				showConfirmButton: true,
				timer: 4000
			});
		}
	});
}

function modalEntregaDetalle(id) {
	$("#modalDetalles").modal("toggle");
}