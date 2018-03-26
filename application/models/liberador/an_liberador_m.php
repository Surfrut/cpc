<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class an_liberador_m extends CI_Model{

function actualizaEstado($datos2){
$qad = $this->load->database('qad', TRUE);
$query = "update pub.ld_det set ld_status = '$datos2[4]' where ld_part = '$datos2[0]' and ld_lot = '$datos2[1]' and ld_domain = 'PUREFRUI' and ld_ref = '$datos2[2]' and ld_loc = '$datos2[3]'";
$execute = odbc_exec($qad->conn_id, $query);
return $execute;
}

//CONSULTA TODOS LOS CLIENTES
function consultaClientes(){
  $qad = $this->load->database('qad', TRUE);
  $query = "select * from pub.cm_mstr where cm_domain = 'PUREFRUI' WITH (NOLOCK)";
  $execute = odbc_exec($qad->conn_id, $query);
  $datos = array();
  while(odbc_fetch_array($execute)){
    $cm_sort = odbc_result($execute, "cm_sort");
    $cm_addr = odbc_result($execute, "cm_addr");
    $arreglo = array('cm_sort' => utf8_encode($cm_sort), 'cm_addr' => utf8_encode($cm_addr));
    array_push($datos,$arreglo);
  }
  return $datos;
}

function pre_asigna($datos_json){
  $datos = array('an_cliente' => $datos_json[0]);
  $this->db->where('an_lote', $datos_json[1]);
  $this->db->where('an_referencia', $datos_json[2]);
  $this->db->set($datos);
  $estado = $this->db->update('analisis');
  return $estado;
}

function asignaQad($datos){
  $qad = $this->load->database('qad', TRUE);
  $query = " update pub.ld_det set ld__chr01 = '$datos[1]' where ld_domain = 'PUREFRUI' and ld_site = '206' and ld_lot = '$datos[2]' and ld_ref = '$datos[3]' ";
  $execute = odbc_exec($qad->conn_id, $query);
  return $query;
}

function consultaNombre_cliente($cliente){
  $qad = $this->load->database('qad', TRUE);
  // var_dump($cliente);
  $query = "select cm_sort from pub.cm_mstr where cm_addr = '$cliente' and cm_domain = 'PUREFRUI' ";
  $execute = odbc_exec($qad->conn_id, $query);
  $datos = array();
  while (odbc_fetch_array($execute)) {
    $nombre_cliente = odbc_result($execute, "cm_sort");
    $arreglo = array('nombre_cliente' => utf8_encode($nombre_cliente) );
    array_push($datos,$arreglo);
  }
  return $datos;
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




}
