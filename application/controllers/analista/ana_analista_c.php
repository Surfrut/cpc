<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ana_analista_c extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('analista/an_analista_m');
	}

	public function index()
	{
		$this->load->view('analista/index');
	}

	function descargar_data(){
		$valor = $this->an_analista_m->descargar_data();
		// echo $valor;
	}

	function ingresadoUsuario(){
		$valor = $this->an_analista_m->ingresadoUsuario();
		echo json_encode($valor);
	}

}

/* End of file ana_analista_c.php */
/* Location: ./application/controllers/analista/ana_analista_c.php */
