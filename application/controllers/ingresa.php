<?php
/**
 * Acceder a la cuenta de cada usuario
 */
class Ingresa extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	public function index(){
		//Encabezado del contenido
		$contentheader['title']		= "INGRESAR A MI CUENTA EN TUMI.COM.GT";
		$data['header']	= $this->load->view('layout/contentheader',$contentheader, TRUE);
		
		$this->load->template('ingresa', $data);
	}
}
