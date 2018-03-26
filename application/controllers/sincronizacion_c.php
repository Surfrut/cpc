<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sincronizacion_c extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('sincronizacion_m');
  }

  function sincronizacion_controlador(){
    $valor = $this->sincronizacion_m->sincronizacion_modelo();
    echo "TERMINÓ";
    echo json_encode($valor);
  }

}
