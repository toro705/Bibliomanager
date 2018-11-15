<?php

Class Libro extends Modelo{

	public $id;
	public $nombre;
	public $url;

	protected $foto_id;

	function foto(){
		return $this->foto = Foto::obtener(array('id' => $this->foto_id), array(
		 	'medidas' => array(
				array(
		 			'ancho' 		=> 98,
		 			'alto'  		=> 138,
		 			'src_default'  	=> '',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'libros',
				'id'     => $this->id
		 	)
		));
	}


	/** Constructor
	* @param array Recibe todos los datos con los que se va a construir el objeto
	*
	*/
	function __construct($datos){
		$this->id = $datos->id;
		$this->nombre = $datos->nombre;
		$this->url = $datos->url;

		$this->foto_id = $datos->foto_id;
	}


	/** Obtener elementos filtrados desde la BD
	* @param filtros Puede ser: todos, id o un array con cualquiera de esos filtros
	*
	*/
	static function obtener( $filtros = array('todos' => ''), $dato = null, $modelo = '', $tabla = ''){

		$filtros = !is_array($filtros) ? array($filtros => $dato) : $filtros;

		return parent::obtener($filtros, $dato, 'Libro', 'libros');
	}

}