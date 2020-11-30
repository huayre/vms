<?php

namespace Modules\Almacenamiento\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AlmacenamientoController extends Controller
{
	private function getCombo($get)
	{
		switch ($get) {
			case 'documento':
				$val = array('WHAREHOUSE', 'RETURN-TO-SUP', 'SHORT-FORM', 'NORMAL-REQUIS');
				$data = $this->armaCombo($val);
				break;
			case 'emisor':
				$val = array('XTEK', 'MELTEK', 'CARRI');
				$data = $this->armaCombo($val);
				break;
			case 'bodegaAO':
				$val = array('BM', 'WMS', 'OTHERS');
				$data = $this->armaCombo($val);
				break;
			case 'tipoPedidoAO':
				$val = array('TIPO X');
				$data = $this->armaCombo($val);
				break;
			case 'estado':
				$val = array('PENDIENTE', 'ASIGNADO', 'PREPARADO', 'LISTO PARA DESPACHO', 'DESPACHADO');
				$data = $this->armaCombo($val);
				break;
			case 'estadoPedidoAO':
				$val = array('NO ASIGNADO', 'ASIGNADO', 'TODOS');
				$data = $this->armaCombo($val);
				break;
				break;
			case 'estadoPicking':
				$val = array('EN PROCESO', 'TODOS');
				$data = $this->armaCombo($val);
				break;
			case 'responsable':
				$val = array('RAWIL CEBALLO', 'ROY HUAYRE', 'LUIS RONDON', 'ISRAEL RONDON');
				$data = $this->armaCombo($val);
				break;
			case 'tipo_zona':
				$val = array('ALTO TRAFICO', 'MEDIO TRAFICO', 'BAJO TRAFICO');
				$data = $this->armaCombo($val);
				break;
			case 'estado_ubicacion':
				$val = array('ACTIVA', 'BLOQUEADA');
				$data = $this->armaCombo($val);
				break;
			case 'columnas':
				$val = array();
				for ($i = 'A'; $i <= 'Z'; $i++){
					$val[] = $i;
					if ($i == 'Z')
						break;
				}
				$data = $this->armaCombo($val);
				break;
			case 'nivel':
				$val = array(1,2,3,4,5,6,7,8,9);
				$data = $this->armaCombo($val);
				break;
			case 'tipo_stock':
				$val = array('PROPIO','TERCEROS');
				$data = $this->armaCombo($val);
				break;
			case 'clasificacion':
				$val = array('STOCK NORMAL','OBSOLETO');
				$data = $this->armaCombo($val);
				break;
			case 'inactividad':
				$val = array('AREA MINA','N/A');
				$data = $this->armaCombo($val);
				break;
			case 'clase':
				$val = array('PERNOS','ACEITES LUBRICANTES', 'ETC');
				$data = $this->armaCombo($val);
				break;
			case 'meses':
				$val = array('ENERO', 'FEBRERO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO', 'JULIO', 'AGOSTO', 'SEPTIEMBRE', 'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE');
				$data = $this->armaCombo($val);
				break;
			case 'anio':
				$val = array(2017,2018,2019,2020);
				$data = $this->armaCombo($val, true);
				break;
		}
		return $data;
	}

	private function armaCombo($arr, $id = false)
	{
		$data = array();
		foreach ($arr as $i => $val) {
			$object = new \stdClass();
			$object->id = ($id == true) ? $val : $i + 1;
			$object->descripcion = $val;
			$data[] = $object;
		}
		return $data;
	}
	/**
	 * Display a listing of the resource.
	 * @return Response
	 */
	public function index()
	{
		return view('almacenaje::index');
	}

	/**
	 * Show the form for creating a new resource.
	 * @return Response
	 */
	public function create()
	{
		return view('almacenaje::create');
	}

	/**
	 * Store a newly created resource in storage.
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Show the specified resource.
	 * @param int $id
	 * @return Response
	 */
	public function show($id)
	{
		return view('almacenaje::show');
	}

	/**
	 * Show the form for editing the specified resource.
	 * @param int $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('almacenaje::edit');
	}

	/**
	 * Update the specified resource in storage.
	 * @param Request $request
	 * @param int $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * @param int $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * Administración de ubicaciones fisicas
	 */
	public function admin_ubicacion()
	{
		return view('almacenaje::admin_ubicacion', [
			'bodegaAO' => $this->getCombo("bodegaAO"),
			'columnas' => $this->getCombo("columnas"),
			'tipoZona' => $this->getCombo("tipo_zona"),
			'estadoUbicacion' => $this->getCombo("estado_ubicacion")
		]);
	}

	/**
	 * Mapa
	 */
	public function mapa()
	{
		return view('almacenaje::mapa', [
			'bodegaAO' => $this->getCombo("bodegaAO")
		]);
	}

	/**
	 * Stock de articulos
	 */
	public function stock_articulo()
	{
		return view('almacenaje::stock_articulo', [
			'bodega' => $this->getCombo("bodegaAO")
		]);
	}

	/**
	 * Stock General
	 */
	public function stock_general()
	{
		return view('almacenaje::stock_general', [
			'bodega' => $this->getCombo("bodegaAO")
		]);
	}

	/**
	 * Ubicaciones disponibles
	 */
	public function ubicaciones_disponibles()
	{
		return view('almacenaje::ubicaciones_disponibles', [
			'bodega' => $this->getCombo("bodegaAO"),
			'zona' => $this->getCombo("tipo_zona"),
			'hilera' => $this->getCombo("nivel"),
			'nivel' => $this->getCombo("nivel")
		]);
	}

	/**
	 * Ubicaciones ocupadas / usadas
	 */
	public function ubicaciones_usadas()
	{
		return view('almacenaje::ubicaciones_usadas', [
			'bodega' => $this->getCombo("bodegaAO"),
			'zona' => $this->getCombo("tipo_zona"),
			'hilera' => $this->getCombo("nivel"),
			'nivel' => $this->getCombo("nivel"),
			'tipo_stock' => $this->getCombo("tipo_stock")
		]);
	}

	/**
	 * Ubicaciones ocupadas por articulos
	 */
	public function ubicaciones_articulos()
	{
		return view('almacenaje::ubicaciones_articulos', [
			'bodega' => $this->getCombo("bodegaAO"),
			'clasificacion' => $this->getCombo("clasificacion"),
			'inactividad' => $this->getCombo("inactividad"),
			'clase' => $this->getCombo("clase")
		]);
	}

	/**
	 * Cuenta corriente de articulos
	 */
	public function ctacte_articulo()
	{
		return view('almacenaje::ctac_articulo', [
			'bodega' => $this->getCombo("bodegaAO")
		]);
	}

	/**
	 * Cuenta corriente por ubicaciones
	 */
	public function ctacte_ubicaciones()
	{
		return view('almacenaje::ctac_ubicaciones', [
			'bodega' => $this->getCombo("bodegaAO")
		]);
	}

	/**
	 * Cuenta corriente por cliente
	 */
	public function ctacte_cliente()
	{
		return view('almacenaje::ctac_cliente', [
			'bodega' => $this->getCombo("bodegaAO")
		]);
	}

	/**
	 * Movimiento mensual de unidades
	 */
	public function movimiento_mensual()
	{
		return view('almacenaje::mov_mensual', [
			'bodega' => $this->getCombo("bodegaAO"),
			'meses' => $this->getCombo("meses"),
			'anio' => $this->getCombo("anio")
		]);
	}
}
