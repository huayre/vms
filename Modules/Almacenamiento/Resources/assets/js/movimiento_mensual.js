/* *********************************************************************************
Autor: Rawil Ceballo
Fecha: 30/10/2020
/* ******************************************************************************** */
$(document).ready(function () {

	$("#buscarMMU").click(function () {
		let mesI = parseInt($("#iniMesMMU").val());
		let mesF = parseInt($("#finMesMMU").val());
		let aniI = parseInt($("#iniAnioMMU").val());
		let aniF = parseInt($("#finAnioMMU").val());

		if (aniI != "" && aniF != "" && mesI != "" && mesF != "") {
			if (aniI <= aniF) {
				if (aniI == aniF && mesI > mesF) {
					Swal.fire({
						icon: "error",
						title: "Valores del mes invalidos.",
						showConfirmButton: true,
						timer: 4000
					});
				}
				else {
					draw_chart();
				}
			}
			else {
				Swal.fire({
					icon: "error",
					title: "Periodo a consultar invalido.",
					showConfirmButton: true,
					timer: 4000
				});
			}
		}
		else {
			Swal.fire({
				icon: "info",
				title: "Complete el periodo antes de consultar",
				showConfirmButton: true
			});
		}
	});

});


function draw_chart() {
	let mesesCfg = ['ENERO', 'FEBRERO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO', 'JULIO', 'AGOSTO', 'SEPTIEMBRE', 'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE'];
	let meses = [];

	let mesI = parseInt($("#iniMesMMU").val());
	let mesF = parseInt($("#finMesMMU").val());
	let aniI = parseInt($("#iniAnioMMU").val());
	let aniF = parseInt($("#finAnioMMU").val());

	if (aniI == aniF) {
		for (i = mesI; i <= mesF; i++) {
			meses.push(mesesCfg[i - 1]);
		}
	}
	else if (aniI < aniF) {
		let ini = aniI;
		let fin = aniF;
		while (ini <= fin) {
			if (ini < fin) {
				if (ini == aniI) {
					for (i = mesI; i <= mesesCfg.length; i++) {
						meses.push(ini + ' - ' + mesesCfg[i - 1]);
					}
				}
				else {
					for (i = 1; i <= mesesCfg.length; i++) {
						meses.push(ini + ' - ' + mesesCfg[i - 1]);
					}
				}
			}
			else if (ini == fin) {
				for (i = 1; i <= mesF; i++) {
					meses.push(ini + ' - ' + mesesCfg[i - 1]);
				}
			}
			ini++;
		}
	}

	/* getInfo */
	let mesesSize = meses.length;
	let saldoIni = [00, 10, 25, 58, 108, 175, 170, 168, 162, 156, 149, 141];
	let entradas = [10, 20, 40, 60, 70];
	let salidas = [00, 05, 07, 10, 03, 5, 2, 6, 7, 8];
	let stockFinal = [10, 25, 58, 108, 175, 170, 168, 162, 156, 149, 141, 141];

	for (i = 0; i < mesesSize; i++) {
		if (saldoIni.length < mesesSize)
			saldoIni.push(0);

		if (entradas.length < mesesSize)
			entradas.push(0);

		if (salidas.length < mesesSize)
			salidas.push(0);

		if (stockFinal.length < mesesSize)
			stockFinal.push(0);
	}

	var areaChartCanvas = $('#areaChart').get(0).getContext('2d');
	var areaChartData = {
		labels: meses,
		datasets: [
			{
				label: 'Saldo Inicial',
				backgroundColor: 'rgba(7, 186, 96, 1)',
				borderColor: 'rgba(7, 186, 96, .9)',
				pointRadius: true,
				pointColor: '#000',
				pointStrokeColor: 'rgba(7, 186, 96, 1)',
				pointHighlightFill: '#000',
				pointHighlightStroke: 'rgba(7, 186, 96, 1)',
				data: saldoIni
			},
			{
				label: 'Entradas',
				backgroundColor: 'rgba(7, 96, 186, 1)',
				borderColor: 'rgba(7, 96, 186, .9)',
				pointRadius: true,
				pointColor: 'rgba(7, 96, 186, 1)',
				pointStrokeColor: '#000',
				pointHighlightFill: '#000',
				pointHighlightStroke: 'rgba(7, 96, 186, 1)',
				data: entradas
			},
			{
				label: 'Salidas',
				backgroundColor: 'rgba(240, 255, 40, 1)',
				borderColor: 'rgba(240, 255, 40, .9)',
				pointRadius: true,
				pointColor: 'rgba(240, 255, 40, 1)',
				pointStrokeColor: '#000',
				pointHighlightFill: '#000',
				pointHighlightStroke: 'rgba(240, 255, 40, 1)',
				data: salidas
			},
			{
				label: 'Stock Final',
				backgroundColor: 'rgba(210, 7, 210, 1)',
				borderColor: 'rgba(210, 7, 210, .9)',
				pointRadius: true,
				pointColor: 'rgba(210, 7, 210, 1)',
				pointStrokeColor: '#000',
				pointHighlightFill: '#000',
				pointHighlightStroke: 'rgba(210, 7, 210, 1)',
				data: stockFinal
			},
		]
	}

	var areaChartOptions = {
		maintainAspectRatio: false,
		responsive: true,
		legend: {
			display: true
		},
		title: {
			display: true,
			text: 'Movimiento Mensual de Unidades'
		},
		tooltips: {
			mode: 'index',
			intersect: true
		},
		scales: {
			xAxes: [{
				gridLines: {
					display: true,
				}
			}],
			yAxes: [{
				gridLines: {
					display: true,
				}
			}]
		}
	}

	// This will get the first returned node in the jQuery collection.
	var areaChart = new Chart(areaChartCanvas, {
		type: 'bar',
		data: areaChartData,
		options: areaChartOptions
	});
}