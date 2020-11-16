<?php

namespace Modules\Tag\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class TagController extends Controller
{

	private function getCombo($get)
	{
		switch ($get) {
			case 'bodega':
				$val = array('BM', 'WMS', 'OTHERS');
				$data = $this->armaCombo($val);
				break;
			case 'hilera':
				$val = array(1, 2, 3, 4);
				$data = $this->armaCombo($val);
				break;
			case 'columna':
				$val = array(1, 2, 3, 4, 5, 6);
				$data = $this->armaCombo($val);
				break;
			case 'nivel':
				$val = array(1, 2, 3);
				$data = $this->armaCombo($val);
				break;
			case 'tipo_almacenamiento':
				$val = array('ESTANTERIA', 'OTHERS');
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
		return view('tag::index');
	}

	/**
	 * Show the form for creating a new resource.
	 * @return Response
	 */
	public function create()
	{
		return view('tag::create');
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
		return view('tag::show');
	}

	/**
	 * Show the form for editing the specified resource.
	 * @param int $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('tag::edit');
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
	 * operadores.
	 */
	public function usuarios()
	{
		return view('tag::usuarios');
	}

	/**
	 * ubicaciones
	 */
	public function ubicaciones()
	{
		return view('tag::ubicaciones', [
			'bodega' => $this->getCombo("bodega"),
			'hilera' => $this->getCombo("hilera"),
			'columna' => $this->getCombo("columna"),
			'nivel' => $this->getCombo("nivel"),
			'tipo_almacenamiento' => $this->getCombo("tipo_almacenamiento")
		]);
	}

	/**
	 * bultos
	 */
	public function bultos()
	{
		return view('tag::bultos');
	}
}
