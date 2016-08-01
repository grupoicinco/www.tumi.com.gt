<?php
/**
 * 
 */
class Inicio extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}
	/**
	 * Pagina de inicio
	 */
	public function index(){
		$this->load->template('inicio');
	}
}
