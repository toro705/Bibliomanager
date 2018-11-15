<?php

Class Logo extends Modelo{

	public $id;
	public $empresa;

	protected $foto_id;

	function foto(){
		return $this->foto = Foto::obtener(array('id' => $this->foto_id), array(
		 	'medidas' => array(
				array(
		 			'ancho' 		=> 242,
		 			'alto'  		=> 130,
		 			'src_default'  	=> '',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'logos',
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
		$this->empresa = $datos->empresa;

		$this->foto_id = $datos->foto_id;
	}


	/** Construye el SQL para un filtro específico
	*
	*/
	protected static function filtro($tabla, $tipo, $dato = null){
		$filtro = parent:: filtro($tabla, $tipo, $dato);
		switch($tipo){
			case 'categoria':
				if(! in_array($dato, array('libreria','editorial'))){
					break;
				}
				$filtro = array(
					'where' => $tabla.'.categ = "'.$dato.'"',
				);
				break;
		}

		return $filtro;
	}


	/** Obtener elementos filtrados desde la BD
	* @param filtros Puede ser: todos, id o un array con cualquiera de esos filtros
	*
	*/
	static function obtener( $filtros = array('todos' => ''), $dato = null, $modelo = '', $tabla = ''){

		$filtros = !is_array($filtros) ? array($filtros => $dato) : $filtros;

		return parent::obtener($filtros, $dato, 'Logo', 'logos');
	}

}