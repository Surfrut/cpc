<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sincronizacion_m extends CI_Model{

  function sincronizacion_modelo(){

    date_default_timezone_set('Chile/Continental');
    $valor = new DateTime();
    $fecha = $valor->format('Y-m-d');
    $nuevafecha = strtotime ( '-100 day' , strtotime ( $fecha ) ) ;
    $nuevafecha = date ( 'Y-m-j' , $nuevafecha );

    $progress = array();
    $progress2 = array();
    $arreglo = array();
    $arreglo2 = array();
    $arreglo_update = array();
    $auxiliar = array();
    $mysql = array();
    $arreglo3 = array();
    $xxwo_mstr = array();
    $si_inserto;
    $clave;

    //CONSULTA XXWO_MSTR QAD**********************************************************************************************
    // $qadcst = $this->load->database('qadcst', TRUE);
    // $query2 = "select xxwo_part, xxwo_lot, xxwo_effdate from pub.xxwo_mstr where xxwo_effdate > '2018-01-01' and xxwo_serial = 'C1180127-0' and xxwo_ref_chg = 'PC031206' and xxwo_part = 'PUMRC300000TP' WITH (NOLOCK)";
    //  $execute2 = odbc_exec($qadcst->conn_id, $query2);
    //  while(odbc_fetch_array($execute2)){
    //    $xxwo_part = odbc_result($execute2, "xxwo_part");
    //    $xxwo_lot = odbc_result($execute2, "xxwo_lot");
    //    $xxwo_effdate = odbc_result($execute2, "xxwo_effdate");
    //    $arreglo3 = array('xxwo_part' => $xxwo_part, 'xxwo_lot' => $xxwo_lot, 'xxwo_effdate' => $xxwo_effdate);
    //    array_push($progress2,$arreglo3);
    //  }
    //  var_dump($progress2);
    //CONSULTA XXWO_MSTR QAD**********************************************************************************************


    //CONSULTA LD_DET QAD*****************************
    //$qadcst = $this->load->database('qadcst', TRUE);

    $qad = $this->load->database('qad', TRUE);
    $query = "CONNECT '/u1/qad/ea/2012se/db/prod/cstprod.db' AS CATALOG cstprod"; // ME CONECTO A LA BASE CUSTOM PARA CRUZAR DIRECTAMENTE CON TABLAS MFG EN UNA QUERY
	$execute = odbc_exec($qad->conn_id, $query);
	
    $query = "select ld_loc,ld_part, ld_qty_oh,ld_lot,ld_ref,ld_status, ld__chr01,cm_sort,pt_desc1,pt_desc2,pt_um,ld_date, pt_um, ld_expire,xxwo_effdate as xxwo_effdate from pub.ld_det inner join pub.pt_mstr on pt_domain='PUREFRUI' and pt_part=ld_part left join pub.cm_mstr on cm_domain='PUREFRUI' and cm_addr=ld__chr01 left join cstprod.pub.xxwo_mstr on xxwo_domain='PUREFRUI' and xxwo_part=ld_part and xxwo_serial=ld_lot and xxwo_ref=ld_ref  where ld_domain = 'PUREFRUI' and ld_site = 206 and pt_group like 'BULK%' and ld_qty_oh>0 and ld_date>='2018-01-01' WITH (NOLOCK)";
    //CON ESTO PUEDO CRUZAR LA TABLA, ANTES DE HACIA UNA QUERY A LA CUSTOM POR CADA REGISTRO EN LA LD_DET UNA ETERNIDAD
	
	
    $execute = odbc_exec($qad->conn_id, $query);

    while(odbc_fetch_array($execute)){

	  $ld_date = odbc_result($execute, "xxwo_effdate"); // SI ES QUE HAY FECHA DE PRODUCCION LA INGRESO, SI NO ES NULA. PERO DE TODAS FORMAS SE ACTUALIZA EL INVENTARIO
	  $ld_loc = odbc_result($execute, "ld_loc");
      $ld_part = odbc_result($execute, "ld_part");
      $ld_qty_oh = round(odbc_result($execute, "ld_qty_oh"), 1, PHP_ROUND_HALF_UP);
      $ld_lot = odbc_result($execute, "ld_lot");
      $ld_ref = odbc_result($execute, "ld_ref");
      $ld_status = odbc_result($execute, "ld_status");
      $ld__chr01 = odbc_result($execute, "ld__chr01");
	  $cm_sort = odbc_result($execute, "cm_sort");
	  $pt_desc1 = odbc_result($execute, "pt_desc1");
	  $pt_desc2 = odbc_result($execute, "pt_desc2");
	  $pt_um = odbc_result($execute, "pt_um");
      $arreglo = array('ld_loc' => $ld_loc, 'ld_part' => $ld_part, 'ld_date' => $ld_date, 'ld_qty_oh' => $ld_qty_oh, 'ld_lot' => $ld_lot, 'ld_ref' => $ld_ref, 'ld_status' => $ld_status, 'ld__chr01' => $ld__chr01, 'cm_sort' => $cm_sort, 'pt_desc1' => $pt_desc1, 'pt_desc2' => $pt_desc2, 'pt_um' => $pt_um);
      array_push($progress,$arreglo);
	  
	  
	  
    } //FIN CONSULTA LD_DET QAD**********************

    //CONSULTA ANALISIS MYSQL

	$data = array('an_cantidad' => 0);
    $this->db->set($data);
    $estado_update = $this->db->update('analisis');

	$data = array('an_inventario' => 0);
    $this->db->set($data);
	$this->db->where('an_inventario!=',2);
    $estado_update = $this->db->update('analisis');

	for ($i=0; $i < count($progress); $i++) {

    $query = $this->db->query("select * from analisis where an_lote='".$progress[$i]['ld_lot']."' and an_referencia='".$progress[$i]['ld_ref']."'");
    if($query->result_array()){
	$row=$query->result_array();
	          $data = array('an_estado' => $progress[$i]['ld_status'], 'an_cliente' => $progress[$i]['ld__chr01'], 'an_descripcion' => $progress[$i]['pt_desc1'].' '.$progress[$i]['pt_desc2'], 'an_um' => $progress[$i]['pt_um'], 'an_qad' => "SI", 'an_qad_cliente' => $progress[$i]['ld__chr01'], 'an_cantidad' => $progress[$i]['ld_qty_oh'], 'an_nombre' => $progress[$i]['cm_sort'], 'an_locacion' => $progress[$i]['ld_loc'],'an_articulo'=> $progress[$i]['ld_part'],'an_fecha'=> $progress[$i]['ld_date'],'an_inventario'=> 1);
              $this->db->where('an_referencia', $progress[$i]['ld_ref']);
              $this->db->where('an_lote', $progress[$i]['ld_lot']);
              $this->db->set($data);
              $estado_update = $this->db->update('analisis'); 
    //var_dump($data);
			  
    }else{
	$data = array('an_estado' => $progress[$i]['ld_status'], 'an_cliente' => $progress[$i]['ld__chr01'], 'an_descripcion' => $progress[$i]['pt_desc1'].' '.$progress[$i]['pt_desc2'], 'an_um' => $progress[$i]['pt_um'], 'an_qad' => "SI", 'an_qad_cliente' => $progress[$i]['ld__chr01'], 'an_cantidad' => $progress[$i]['ld_qty_oh'], 'an_nombre' => $progress[$i]['cm_sort'], 'an_locacion' => $progress[$i]['ld_loc'],'an_referencia' => $progress[$i]['ld_ref'],'an_lote' => $progress[$i]['ld_lot'],'an_articulo'=> $progress[$i]['ld_part'],'an_fecha'=> $progress[$i]['ld_date'],'an_inventario'=> 1);
   $inserta = $this->db->insert('analisis',$data);
   //var_dump($data);
    $si_inserto = $this->db->affected_rows();

	}
    }

    return $arreglo;

  }


}//FIN MODELO
