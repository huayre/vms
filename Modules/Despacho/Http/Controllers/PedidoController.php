<?php
/* *********************************************************************************
Autor: Rawil Ceballo
Fecha: 30/10/2020
/* ******************************************************************************** */
namespace Modules\Despacho\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class PedidoController extends Controller
{
	/**
	 * Display a listing of the resource.
	 * @return Response
	 */
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

	public function index()
	{
		return view('despacho::pedido', [
			'documentoPD' => $this->getCombo("documento"),
			'estadoPD' => $this->getCombo("estado"),
			'emisorPD' => $this->getCombo("emisor")
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 * @return Response
	 */
	public function create()
	{
		return view('despacho::create');
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
		return view('despacho::show');
	}

	/**
	 * Show the form for editing the specified resource.
	 * @param int $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('despacho::edit');
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
	 * Asignación de pedidos.
	 */
	public function asignacion()
	{
		return view('despacho::asignacion', [
			'bodegaAO' => $this->getCombo("bodegaAO"),
			'tipoPedidoAO' => $this->getCombo("tipoPedidoAO"),
			'estadoPedidoAO' => $this->getCombo("estadoPedidoAO")
		]);
	}

	/**
	 * Estado de preparación 'pedidos'.
	 */
	public function preparacion()
	{
		return view('despacho::preparacion', [
			'bodegaAO' => $this->getCombo("bodegaAO"),
			'estadoPedidoAO' => $this->getCombo("estadoPedidoAO")
		]);
	}

	/**
	 * Entrega en ventana
	 */
	public function entrega_ventana()
	{
		return view('despacho::entrega_ventana', [
			'bodegaAO' => $this->getCombo("bodegaAO")
		]);
	}

	/**
	 * Entrega no catalogados
	 */
	public function entrega_nocatalogados()
	{
		return view('despacho::entrega_no_catalogados', [
			'bodegaAO' => $this->getCombo("bodegaAO")
		]);
	}

	/**
	 * Consultas picking
	 */
	public function picking()
	{
		return view('despacho::picking', [
			'bodegaAO' => $this->getCombo("bodegaAO"),
			'estadoPedidoAO' => $this->getCombo("estadoPicking")
		]);
	}

	/**
	 * Conciliacion despacho
	 */
	public function conciliacion_despacho()
	{
		return view('despacho::conciliacion_despacho', [
			'bodegaAO' => $this->getCombo("bodegaAO"),
			'estadoPedidoAO' => $this->getCombo("estadoPicking")
		]);
	}

	/**
	 * Conciliacion despacho
	 */
	public function reingreso_articulos()
	{
		return view('despacho::reingreso_articulos', [
			'bodegaAO' => $this->getCombo("bodegaAO")
		]);
	}
}
