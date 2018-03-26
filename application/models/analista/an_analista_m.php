<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class an_analista_m extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    // $this->load->model(array('model'));
  }

  function descargar_data(){
    $this->db->select('*');
    $this->db->from('analisis');
    $analisis = $this->db->get()->result_array();

    date_default_timezone_set('Chile/Continental');
    $valor = new DateTime();
    $fecha = $valor->format('Y-m-d H:i:s');

    $archivo = 'Analisis '.$fecha.'.csv';

    header("Content-type: text/csv");
    header("Content-Disposition: attachment; filename=".$archivo);

    $fp = fopen("php://output", 'w');

    fwrite($fp, 'Id'.";");
    fwrite($fp, 'Locacion'.";");
    fwrite($fp, 'Articulo'.";");
    fwrite($fp, 'Fecha'.";");
    fwrite($fp, 'Lote'.";");
    fwrite($fp, 'Referencia'.";");
    fwrite($fp, 'Estado'.";");
    fwrite($fp, 'Descripcion'.";");
    fwrite($fp, 'Cliente'.";");
    fwrite($fp, 'Nombre'.";");
    fwrite($fp, 'Cantidad'.";");
    fwrite($fp, 'UM'.";");
    fwrite($fp, 'PH'.";");
    fwrite($fp, 'Brix'.";");
    fwrite($fp, 'Cons5sec'.";");
    fwrite($fp, 'Cons30sec'.";");
    fwrite($fp, 'Acasc'.";");
    fwrite($fp, 'Acidez'.";");
    fwrite($fp, 'Bar'.";");
    fwrite($fp, 'Color'.";");
    fwrite($fp, 'Densidad'.";");
    fwrite($fp, 'Pnegros'.";");
    fwrite($fp, 'Patulina'.";");
    fwrite($fp, 'Ramacidos'.";");
    fwrite($fp, 'Hongos'.";");
    fwrite($fp, 'Levadura'.";");
    fwrite($fp, 'Ecoli'.";");
    fwrite($fp, 'Coliformes'.";");
    fwrite($fp, 'HongosTerm'.";");
    fwrite($fp, 'Salmonnela'.";");
    fwrite($fp, 'Alyciclo'.";");
    fwrite($fp, 'Howardm'.";");
    fwrite($fp, 'Generico_1'.";");
    fwrite($fp, 'Generico_2'.";");
    fwrite($fp, 'Generico_3'.";");
    fwrite($fp, 'Generico_4'.";");
    fwrite($fp, 'Generico_5'.";");
    fwrite($fp, 'Generico_6'.";");
    fwrite($fp, 'Generico_7'.";");
    fwrite($fp, 'Generico_8'.";");
    fwrite($fp, 'Generico_9'.";");
  fwrite($fp, 'Generico_10'.";");
  fwrite($fp, 'Generico_11'.";");
  fwrite($fp, 'Generico_12'.";");
  fwrite($fp, 'Generico_13'.";");
  fwrite($fp, 'Generico_14'.";");
  fwrite($fp, 'Generico_15'.";");
  fwrite($fp, 'Generico_16'.";");
  fwrite($fp, 'Generico_17'.";");
  fwrite($fp, 'Generico_18'.";");
  fwrite($fp, 'Generico_19'.";");
  fwrite($fp, 'Generico_20'.";");
  fwrite($fp, 'Generico_21'.";");
  fwrite($fp, 'Generico_22'.";");
  fwrite($fp, 'Generico_23'.";");
  fwrite($fp, 'Generico_24'.";");
  fwrite($fp, 'Generico_25'."\n");

    foreach ($analisis as $row) {
      // var_dump($row->an_articulo);
      fputcsv($fp, $row, ";");
    }
    fclose($fp);
    exit;


  }

  function ingresadoUsuario(){
    $this->db->select('*');
    $this->db->from('analisis');
    $this->db->where('an_fecha_creacion IS NULL', null, false);
    $datos = $this->db->get()->result_array();

    $arrayName = array();

    foreach ($datos as $key) {
      array_push($arrayName, $key);
    }

    return $arrayName;

  }

}
