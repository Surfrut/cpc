<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lib_liberar_c extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('modelo');
		$this->load->model('liberador/an_liberador_m');
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

	function actualizaEstado(){
		$datos = $this->input->post('datos');
		$datos2 = json_decode($datos);
		$valor = $this->an_liberador_m->actualizaEstado($datos2);
		echo $valor;
	}

	function consultaClientes(){
		$valor = $this->an_liberador_m->consultaClientes();
		echo json_encode($valor, JSON_UNESCAPED_UNICODE);
	}

	function pre_asigna(){
		$datos_json = $this->input->post('datos_json');
		$datos_json = json_decode($datos_json, TRUE);
		$valor = $this->an_liberador_m->pre_asigna($datos_json);
		echo json_encode($valor);
	}

	function menuReporte(){
		$valor = $this->an_liberador_m->menuReporte();
		echo json_encode($valor);
	}


	//***********************************ACTUALIZAR AN_CLIENTE_QAD A QUE SI TIENE CLIENTE

	function asignaQad(){
		$datos = $this->input->post('datos');
		$datos2 = json_decode($datos);
		$valor = $this->an_liberador_m->asignaQad($datos2);
		echo json_encode($valor);
	}

	function consultaNombre_cliente(){
		$cliente = $this->input->post('cliente');
		$valor = $this->an_liberador_m->consultaNombre_cliente($cliente);
		echo json_encode($valor,JSON_UNESCAPED_UNICODE);
	}

	function descargar_data(){
		$valor = $this->an_analista_m->descargar_data();
		// echo $valor;
	}

}

/* End of file lib_liberar_c.php */
/* Location: ./application/controllers/controllername.php */
