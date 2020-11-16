/* *********************************************************************************
Autor: Rawil Ceballo
Fecha: 30/10/2020
/* ******************************************************************************** */
$(document).ready(function () {

	$("#buscarMP").click(function () {
		hileras();
	});
});

function convertLetra(n) {

	while (n > 25) {
		if (n > 25)
			n -= 25;
	}

	switch (n) {
		case 1:
			$r = 'A';
			break;
		case 2:
			$r = 'B';
			break;
		case 3:
			$r = 'C';
			break;
		case 4:
			$r = 'D';
			break;
		case 5:
			$r = 'E';
			break;
		case 6:
			$r = 'F';
			break;
		case 7:
			$r = 'G';
			break;
		case 8:
			$r = 'H';
			break;
		case 9:
			$r = 'I';
			break;
		case 10:
			$r = 'J';
			break;
		case 11:
			$r = 'K';
			break;
		case 12:
			$r = 'M';
			break;
		case 13:
			$r = 'N';
			break;
		case 14:
			$r = 'O';
			break;
		case 15:
			$r = 'P';
			break;
		case 16:
			$r = 'Q';
			break;
		case 17:
			$r = 'R';
			break;
		case 18:
			$r = 'S';
			break;
		case 19:
			$r = 'T';
			break;
		case 20:
			$r = 'U';
			break;
		case 21:
			$r = 'V';
			break;
		case 22:
			$r = 'W';
			break;
		case 23:
			$r = 'X';
			break;
		case 24:
			$r = 'Y';
			break;
		case 25:
			$r = 'Z';
			break;
		default:
			$r = 'N/A';
			break;
	}
	return $r;
}

function returnMap() {
	let code = 'MP1-C00';
	let nivel = 0;
	let nm = 0;
	let columna = 1;
	let almacen = 'Contenedores';
	let zona = 'Alto trafico';
	let compart = 'Falso';
	let estado = 'Activa';
	let articulo = '1258741258';
	let nombre = 'CPU INTEL I9';
	let info = {
		'nivel': [
			{
				'nivel': ++nivel,
				'detalle': [
					{
						'nivel': nivel,
						'columna': convertLetra(columna = 1),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + (nm=1),
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					}
				]
			},
			{
				'nivel': ++nivel,
				'detalle': [
					{
						'nivel': nivel,
						'columna': convertLetra(columna = 1),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + (nm=1),
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					}
				]
			},
			{
				'nivel': ++nivel,
				'detalle': [
					{
						'nivel': nivel,
						'columna': convertLetra(columna = 1),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + (nm=1),
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					}
				]
			},
			{
				'nivel': ++nivel,
				'detalle': [
					{
						'nivel': nivel,
						'columna': convertLetra(columna = 1),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + (nm=1),
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					}
				]
			},
			{
				'nivel': ++nivel,
				'detalle': [
					{
						'nivel': nivel,
						'columna': convertLetra(columna = 1),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + (nm=1),
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					}
				]
			},
			{
				'nivel': ++nivel,
				'detalle': [
					{
						'nivel': nivel,
						'columna': convertLetra(columna = 1),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + (nm=1),
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					}
				]
			},
			{
				'nivel': ++nivel,
				'detalle': [
					{
						'nivel': nivel,
						'columna': convertLetra(columna = 1),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + (nm=1),
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 1,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 2,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 2,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 2,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 2,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 2,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					}
				]
			},
			{
				'nivel': ++nivel,
				'detalle': [
					{
						'nivel': nivel,
						'columna': convertLetra(columna = 1),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + (nm=1),
						'taken': 2,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 2,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 2,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 2,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 2,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 2,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 2,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 2,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 2,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 2,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 2,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					}
				]
			},
			{
				'nivel': ++nivel,
				'detalle': [
					{
						'nivel': nivel,
						'columna': convertLetra(columna = 1),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + (nm=1),
						'taken': 2,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 2,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 2,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 2,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 2,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 2,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 2,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 0,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 0,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 0,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					},
					{
						'nivel': nivel,
						'columna': convertLetra(++columna),
						'ubicacion': code + nivel + '-' + convertLetra(columna) + ++nm,
						'taken': 0,
						'almacen': almacen,
						'zona': zona,
						'compart': compart,
						'estado': estado,
						'artículo': articulo,
						'nombre': nombre
					}
				]
			}
		]
	};
	return info;
}

function hileras() {
	let bodega = $("#bodegaMP").val();
	$("#hilerasOB").html('');
	$("#mapaOB").html('');
	if (bodega != '') {
		let info = {
			'hileras': [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20]
		};

		$.each(info.hileras, function (i, row) {
			let val = (row < 10) ? '0' + row : row;
			let btns = '<button type="button" class="btn btn-info mb-2 ml-1 btnHilera" onclick="draw_map(this)">Hilera ' + val + '</button>';
			$("#hilerasOB").append(btns);
		});
	}
}

function draw_map(btn) {
	$(".btnHilera").removeClass('btn-primary');
	$(".btnHilera").addClass('btn-info');

	$(btn).removeClass('btn-info');
	$(btn).addClass('btn-primary');

	$("#mapaOB").html('');
	let info = returnMap();
	let nivel = info.nivel;
	let color = ['bg-light', 'bg-success', 'bg-secondary'];
	let size = nivel.length;
	for (c = size; c > 0; c--) {
		//$.each(nivel, function (c, row) {
		let space = '<div class="nivel">  <span>Nivel ' + nivel[c - 1].nivel + '</span>';
		$.each(nivel[c - 1].detalle, function (i, col) {
			details = '<div class="details bg-light">' +
				'	<ul>' +
				'		<li>Nivel: ' + col.nivel + '</li>' +
				'		<li>Columna: ' + col.columna + '</li>' +
				'		<li>CodUbica: ' + col.ubicacion + '</li>' +
				'		<li>Almacen: ' + col.almacen + '</li>' +
				'		<li>Zona: ' + col.zona + '</li>' +
				'		<li>Compart: ' + col.compart + '</li>' +
				'		<li>Estado: ' + col.estado + '</li>' +
				'		<li>Cód. artículo: ' + col.artículo + '</li>' +
				'		<li>Nombre: ' + col.nombre + '</li>' +
				'	</ul>' +
				'</div>';
			space += '<div class="ubicacion ' + color[col.taken] + '">' + col.ubicacion + ' ' + details + '</div>';
		});
		space += '</div>';
		$("#mapaOB").append(space);
		//});
	}
}