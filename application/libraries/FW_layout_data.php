<?php
/**
 * Desplegar datos para el header y footer
 */
class FW_layout_data {
	
	var $FW;
	function __construct(){
		$this->FW			=& get_instance();
		$this->FW->load->model('plugins/layout_model', 'layout_model');
		$this->FW->load->helper('utilities');
	}
	
	/**
	 * Función que despliega los datos para el header
	 */
	public function header_data(){
		$data['external_files'] = array(
									load_external_file('clear.css', 'css'),
									load_external_file('bootstrap.css', 'css'),
									load_external_file('tumi.css', 'css'),
									load_external_file('bootstrap-theme.css', 'css'),
									load_external_file('easyzoom.css', 'css'),
									load_external_file('jquery.rs.carousel.css', 'css'),
									
									load_external_file('//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', 'js', false),
									load_external_file('bootstrap.js', 'js'),
									load_external_file("easyzoom.js", 'js'),
									load_external_file("jquery-carousel/jquery.event.drag.js", 'js'),
									load_external_file("jquery-carousel/jquery.ui.widget.js", 'js'),
									load_external_file("jquery-carousel/jquery.translate3d.js", 'js'),
									load_external_file("jquery-carousel/jquery.rs.carousel.js", 'js'),
									load_external_file("jquery-carousel/jquery.rs.carousel-touch.js", 'js'),
									load_external_file("jquery-carousel/jquery.rs.carousel-continuous.js", 'js'),
									load_external_file("smoothAnchor.jQuery.js", 'js')
									);
		return $data;
	}
}
