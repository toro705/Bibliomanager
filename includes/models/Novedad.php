<?php

Class Novedad extends Modelo{

	public $id;
	public $fecha;

	public $titulo;
	public $bajada;
	public $cuerpo;

	function url(){
		return $this->url = url('novedad',$this);
	}

	function foto(){
		return $this->foto = Foto::obtener(array('id' => $this->foto_id), array(
		 	'medidas' => array(
				array(
		 			'ancho' 		=> 300,
		 			'alto'  		=> 250,
		 			'src_default'  	=> 'novedad-300.gif',
				),
				array(
		 			'ancho' 		=> 360,
		 			'alto'  		=> 300,
		 			'src_default'  	=> 'novedad-360.gif',
				),
				array(
		 			'ancho' 		=> 654,
		 			'alto'  		=> 545,
		 			'src_default'  	=> 'novedad-654.gif',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'novedades',
				'id'     => $this->id
		 	)
		));
	}

	function foto_destacada(){
		return $this->foto = Foto::obtener(array('id' => $this->foto_destacada_id), array(
		 	'medidas' => array(
				array(
		 			'ancho' 		=> 640,
		 			'alto'  		=> 210,
		 			'src_default'  	=> '',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'novedades',
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
		$this->fecha = new Fecha($datos->fecha);
		$this->cargar_traducciones(array('titulo','bajada','cuerpo'), $datos);
		
		$this->foto_id = $datos->foto_id;
		$this->foto_destacada_id = $datos->foto_destacada_id;
	}


	/** Construye el SQL para un filtro específico
	*
	*/
	protected static function filtro($tabla, $tipo, $dato = null){
		$filtro = parent::filtro($tabla, $tipo, $dato);
		switch($tipo){
			case 'news':
				$filtro = array(
					'from'  => 'JOIN newsletters_novedades ON newsletters_novedades.novedad_id = '.$tabla.'.id',
					'where'  => 'newsletters_novedades.newsletter_id = '.intval($dato).' AND newsletters_novedades.destacada = 0',
					'order'  => 'newsletters_novedades.orden ASC, newsletters_novedades.id DESC'
				);
				break;

			case 'news-destacada':
				$filtro = array(
					'from'  => 'JOIN newsletters_novedades ON newsletters_novedades.novedad_id = '.$tabla.'.id',
					'where'  => 'newsletters_novedades.newsletter_id = '.intval($dato).' AND newsletters_novedades.destacada = 1',
					'order'  => 'newsletters_novedades.orden ASC, newsletters_novedades.id DESC'
				);
				break;
		}

		return $filtro;
	}


	/** Obtener elementos filtrados desde la BD
	* @param filtros Puede ser: todos, id o un array con cualquiera de esos filtros
	*
	*/
	static function obtener( $filtros = array('todas' => ''), $dato = null, $modelo = '', $tabla = ''){

		$filtros = !is_array($filtros) ? array($filtros => $dato) : $filtros;
		if(! array_key_exists('vp', $filtros)){
			$filtros = array_merge($filtros, array('activa' => 1));
		}

		$elementos = parent::obtener($filtros, $dato, 'Novedad', 'novedades');

		if(array_key_exists('news-destacada', $filtros)){
			return count($elementos)>0 ? reset($elementos) : null;
			
		}else{
			return $elementos;
		} 
	}



	/** SQL por defecto
	* Defino los valores por defecto para todas las cláusulas
	* Ordeno las noticias por fecha
	*/
	protected static function sql_defecto($tabla, $clausula, $sentencias){
		switch($clausula){
			case 'order' :
				return 'ORDER BY '.(!empty($sentencias) ? implode(',', $sentencias).',' : '').' '.$tabla.'.fecha DESC, '.$tabla.'.orden ASC, '.$tabla.'.id ASC';
			default:
				return parent::sql_defecto($tabla, $clausula, $sentencias);
		}
	}

}