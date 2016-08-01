<?php
/**
 * Perfil del usuario
 */
class Perfil extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		
		$page_titles				= array(
										'index'				=> 'MI CUENTA',
										'cuenta'			=> 'MI PERFIL',
										'recomendaciones'	=> 'RECOMENDACIONES',
										'personalizar'		=> 'MONOGRAMA',
										'ordenes'			=> 'ART&Iacute;CULOS GUARDADOS',
										'tracer'			=> 'REGISTRE SU TUMI',
										'reparaciones'		=> 'PEDIDO DE REPARACI&Oacute;N'
										);
		
		$contentheader['title']		= $page_titles[$this->router->fetch_method()];
		$contentheader['menu']		= array(
										'cuenta'			=> '<span class="glyphicon glyphicon-user"></span><p>Perfil</p>',
										'recomendaciones'	=> '<span class="glyphicon glyphicon-ok-circle"></span><p>Recomendaciones</p>',
										'personalizar'		=> '<span class="glyphicon glyphicon-sd-video"></span><p>Personalizaci&oacute;n</p>',
										'ordenes'			=> '<span class="glyphicon glyphicon-shopping-cart"></span><p>Compras Guardadas</p>',
										'tracer'			=> '<span class="glyphicon glyphicon-barcode"></span><p>TUMI Tracer</p>',
										'reparaciones'		=> '<span class="glyphicon glyphicon-wrench"></span><p>Servicio de Garant&iacute;as</p>'
										);
									
		$this->content_header		= $this->load->view('layout/contentheader',$contentheader, TRUE);
	}
	
	/**
	 * Perfil general del usuario
	 */
	public function index(){
		//Encabezado del contenido
		$data['header']		= $this->content_header;
		$data['atencion']	= $this->load->view('layout/atencion',null, TRUE);
		
		$this->load->template('perfil', $data);
	}
	/**
	 * Datos del perfil
	 */
	 public function cuenta(){
		//Encabezado del contenido
		$data['header']		= $this->content_header;
		$data['atencion']	= $this->load->view('layout/atencion',null, TRUE);
		
		$this->load->template('perfil_cuenta', $data);
	 }
	 /**
	  * Recomendaciones de producto
	  */
	  public function recomendaciones(){
		//Encabezado del contenido
		$data['header']		= $this->content_header;
		$data['atencion']	= $this->load->view('layout/atencion',null, TRUE);
		
		$this->load->template('perfil_recomendaciones', $data);
	  }
	  /**
	   * Monograma
	   */
	public function personalizar(){
		//Encabezado del contenido
		$data['header']		= $this->content_header;
		$data['atencion']	= $this->load->view('layout/atencion', null, TRUE);
		
		$this->load->template('perfil_monograma', $data);
	}
	/**
	 * Astículos Guardados
	 */
	 public function ordenes(){
		//Encabezado del contenido
		$data['header']		= $this->content_header;
		$data['atencion']	= $this->load->view('layout/atencion', null, TRUE);
		
		$this->load->template('perfil_ordenes', $data);
	 }
	 /**
	  * TUMI Tracer
	  */
	  public function tracer($tracer = NULL){
	  	$data['tracer']	= $tracer;
		$this->load->template('perfil_tracer', $data);
	  }
	/**
	 * Reclamos
	 */
	 public function reparaciones(){
		//Encabezado del contenido
		$data['header']		= $this->content_header;
		$data['atencion']	= $this->load->view('layout/atencion', null, TRUE);
		
		$this->load->template('perfil_reparaciones', $data);
	 }
}
