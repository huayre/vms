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
		}
		return $data;
	}

	private function armaCombo($arr)
	{
		$data = array();
		foreach ($arr as $i => $val) {
			$object = new \stdClass();
			$object->id = $i + 1;
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
		return view('almacenamiento::index');
	}

	/**
	 * Show the form for creating a new resource.
	 * @return Response
	 */
	public function create()
	{
		return view('almacenamiento::create');
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
		return view('almacenamiento::show');
	}

	/**
	 * Show the form for editing the specified resource.
	 * @param int $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('almacenamiento::edit');
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
		return view('almacenamiento::admin_ubicacion', [
			'bodegaAO' => $this->getCombo("bodegaAO"),
			'columnas' => $this->getCombo("columnas"),
			'tipoZona' => $this->getCombo("tipo_zona"),
			'estadoUbicacion' => $this->getCombo("estado_ubicacion")
		]);
	}
}
