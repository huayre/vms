/* *********************************************************************************
Autor: Rawil Ceballo
Fecha: 30/10/2020
/* ******************************************************************************** */
$(document).ready(function () {

	$("#buscarMP").click(function(){
		draw_map();
	});
});

function draw_map(){
	let nivel = [1,2,3,4,5,6,7];
	let ubicacion = [1,2,3,4,5,6,7,8,9];
	
	let nivelSize = nivel.length;
	let ubicSize = ubicacion.length;

	$.each(nivel,function(i,val){
		let space = '<div class="nivel">  <span>Nivel '+ val + '</span>';

		$.each(ubicacion, function(j, col){
			space += '<div class="ubicacion">' + col + '</div>';
		});
		space += '</div>';
		$("#mapaOB").append(space);
	});
}