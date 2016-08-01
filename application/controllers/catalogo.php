<?php
/**
 * Catálogo de productos
 */
class Catalogo extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		
		$this->load->helper('breadcrumb');
	}
	
	/**
	 * Resumen del catalogo
	 */
	public function index(){
		$this->navega(1);
	}
	/**
	 * Resumen del catalogo
	 */
	public function navega($familia = 1){
		$data['familia']	=	$familia;
		
		$this->load->template('catalogo_listado', $data);
	}
	/**
	 * Mostrar el detalle del producto
	 */
	 public function producto(){
	 	$this->load->template('catalogo_producto');
	 }
}