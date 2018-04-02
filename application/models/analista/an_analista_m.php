<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class an_analista_m extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    // $this->load->model(array('model'));
  }

  function descargar_data(){
    $this->db->select('an_id, an_locacion,  an_articulo,  an_fecha, an_lote,  an_referencia,  an_estado,  an_descripcion, an_cliente, an_nombre,  an_cantidad,  an_um,  an_ph,  an_brix,  an_cons5sec,  an_cons30sec, an_acasc, an_acidez,  an_bar, an_color, an_densidad,  an_pnegros, an_patulinas, an_ramacidos, an_hongos,  an_levaduras, an_ecoli, an_coliformes,  an_hongosterm,  an_salmonella,  an_alyciclo,  an_howardm, an_generico1, an_generico2, an_generico3, an_generico4, an_generico5, an_generico6, an_generico7, an_generico8, an_generico9, an_generico10,  an_generico11,  an_generico12,  an_generico13,  an_generico14,  an_generico15,  an_generico16,  an_generico17,  an_generico18,  an_generico19,  an_generico20,  an_generico21,  an_generico22,  an_generico23,  an_generico24,  an_generico25,
');
    $this->db->from('analisis');
    $analisis = $this->db->get()->result_array();
    // var_dump($analisis);

    date_default_timezone_set('Chile/Continental');
    $valor = new DateTime();
    $fecha = $valor->format('Y-m-d');
    $hora = $valor->format('H:i:s');
    $data = $fecha.' '.$hora;

    $archivo = 'Analisis '.$data.'.csv';

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
