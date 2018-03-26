<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lib_liberar_c extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('modelo');
	}

	public function index()
	{
		$this->load->view('liberador/index');
	}

	function ingresaAnalisis(){
		$analisis = $this->input->post('analisis');
		$valor = $this->modelo->ingresaAnalisis();
		echo json_encode($valor);
	}

}

/* End of file lib_liberar_c.php */
/* Location: ./application/controllers/controllername.php */