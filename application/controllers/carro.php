<?php
/**
 * Catálogo de productos
 */
class Carro extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		
		$this->load->helper('breadcrumb');
	}
	
	/**
	 * Resumen del catalogo
	 */
	public function index(){
		$this->compras();
	}
	/**
	 * Resumen del catalogo
	 */
	public function compras(){
		
		$this->load->template('carro_compras');
	}
}