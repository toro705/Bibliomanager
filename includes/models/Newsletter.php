<?php

Class Newsletter extends Modelo{

	public $id;
	public $fecha;
	public $titulo;

	function novedades(){
		$filtros = array(
			'vp'=>true,
			'news'=>$this->id,
		);
		return Novedad::obtener($filtros);
	}

	function novedad_destacada(){
		$filtros = array(
			'vp'=>true,
			'news-destacada'=>$this->id,
		);
		return Novedad::obtener($filtros);
	}

	function url(){
		return url('news-novedades',$this->id);
	}

	/** Constructor
	* @param array Recibe todos los datos con los que se va a construir el objeto
	*
	*/
	function __construct($datos){

		$this->id = $datos->id;
		$this->fecha = new Fecha($datos->fecha);
		$this->titulo = $datos->titulo;
	}


	/** Obtener elementos filtrados desde la BD
	* @param filtros Puede ser: todos, id o un array con cualquiera de esos filtros
	*
	*/
	static function obtener( $filtros = array('todos' => ''), $dato = null, $modelo = '', $tabla = ''){
		return parent::obtener($filtros, $dato, 'Newsletter', 'newsletters');
	}
}