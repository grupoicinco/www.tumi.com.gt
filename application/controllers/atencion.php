<?php
/**
 * Servicios de atención al cliente
 */
class Atencion extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		
		$page_titles				= array(
										'index'			=> 'PREGUNTAS FRECUENTES',
										'faq'			=> 'PREGUNTAS FRECUENTES',
										'garantia'		=> 'INFORMACI&Oacute;N DE GARANT&Iacute;A',
										'cambios'		=> 'POL&Iacute;TICA DE CAMBIO'
										);
		
		$contentheader['title']		= $page_titles[$this->router->fetch_method()];
		$this->content_header		= $this->load->view('layout/contentheader',$contentheader, TRUE);
	}
	
	public function index(){
		//Encabezado del contenido
		$data['header']	= $this->content_header;
		
		$this->load->template('atencion_faq', $data);
	}
	/**
	 * preguntas frecuentes
	 */
	public function faq(){
		$this->index();
	}
	/**
	 * Garantía
	 */
	 public function garantia(){
	 	$data['header']	= $this->content_header;
		
		$this->load->template('atencion_garantia', $data);
	 }
	 /**
	  * Política de cambio
	  */
	  public function cambios(){
	 	$data['header']	= $this->content_header;
		
		$this->load->template('atencion_cambios', $data);
	  }
}
