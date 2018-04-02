<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelo extends CI_Model {

	function listar_analisis(){
		$this->db->select('
			an_id as Id,
			an_locacion as Locacion,
			an_articulo as Articulo,
			an_fecha as Fecha,
			an_lote as Lote,
			an_referencia as Referencia,
			an_estado as Estado,
			an_descripcion as Descripcion,
			an_cliente as Cliente,
			an_nombre as Nombre,
			an_cantidad as Cantidad,
			an_um as UM,
			an_ph as PH,
			an_brix as Brix,
			an_cons5sec as Cons5sec,
			an_cons30sec as Cons30sec,
			an_acasc as Acasc,
			an_acidez as Acidez,
			an_bar as Bar,
			an_color as Color,
			an_densidad as Densidad,
			an_pnegros as Pnegros,
			an_patulinas as Patulina,
			an_ramacidos as Ramacidos,
			an_hongos as Hongos,
			an_levaduras as Levadura,
			an_ecoli as Ecoli,
			an_coliformes as Coliformes,
			an_hongosterm as HongosTerm,
			an_salmonella as Salmonnela,
			an_alyciclo as Alyciclo,
			an_howardm as Howardm,
			an_generico1 as Generico_1,
			an_generico2 as Generico_2,
			an_generico3 as Generico_3,
			an_generico4 as Generico_4,
			an_generico5 as Generico_5,
			an_generico6 as Generico_6,
			an_generico7 as Generico_7,
			an_generico8 as Generico_8,
			an_generico9 as Generico_9,
			an_generico10 as Generico_10,
			an_generico11 as Generico_11,
			an_generico12 as Generico_12,
			an_generico13 as Generico_13,
			an_generico14 as Generico_14,
			an_generico15 as Generico_15,
			an_generico16 as Generico_16,
			an_generico17 as Generico_17,
			an_generico18 as Generico_18,
			an_generico19 as Generico_19,
			an_generico20 as Generico_20,
			an_generico21 as Generico_21,
			an_generico22 as Generico_22,
			an_generico23 as Generico_23,
			an_generico24 as Generico_24,
			an_generico25 as Generico_25,
			an_qad as QAD,
			an_qad_cliente as CLIENTE,
			an_fecha_creacion as fechaIngreso,
			an_usuario as Usuario
			');
		// $this->db->order_by('an_id', 'desc'); //SE CAMBIA EL ORDEN A PEDIDO DE PRISCILA FERNÁNDEZ
		$this->db->from('analisis');
	 	$this->db->where('an_inventario',1);
		$this->db->or_where('an_inventario',2);
		$this->db->order_by('Referencia', 'asc');
		return $this->db->get()->result_array();
	}

	function actualiza_linea(
		$Id,
		$Locacion,
		$Articulo,
		$Fecha,
		$Lote,
		$Referencia,
		$Estado,
		$Descripcion,
		$Cliente,
		$Nombre,
		$Cantidad,
		$UM,
		$PH,
		$Brix,
		$Cons5sec,
		$Cons30sec,
		$Acasc,
		$Acidez,
		$Bar,
		$Color,
		$Densidad,
		$Pnegros,
		$Patulina,
		$Ramacidos,
		$Hongos,
		$Levadura,
		$Ecoli,
		$Coliformes,
		$HongosTerm,
		$Salmonnela,
		$Alyciclo,
		$Howardm,
		$Generico_1,
		$Generico_2,
		$Generico_3,
		$Generico_4,
		$Generico_5,
		$Generico_6,
		$Generico_7,
		$Generico_8,
		$Generico_9,
		$Generico_10,
		$Generico_11,
		$Generico_12,
		$Generico_13,
		$Generico_14,
		$Generico_15,
		$Generico_16,
		$Generico_17,
		$Generico_18,
		$Generico_19,
		$Generico_20,
		$Generico_21,
		$Generico_22,
		$Generico_23,
		$Generico_24,
		$Generico_25
		){

		$data = array(

			'an_id' => $Id,
			'an_locacion' => $Locacion,
			'an_articulo' => $Articulo,
			'an_fecha' => $Fecha,
			'an_lote' => $Lote,
			'an_referencia' => $Referencia,
			'an_estado' => $Estado,
			'an_descripcion' => $Descripcion,
			'an_cliente' => $Cliente,
			'an_nombre' => $Nombre,
			'an_cantidad' => $Cantidad,
			'an_um' => $UM,
			'an_ph' => $PH,
			'an_brix' => $Brix,
			'an_cons5sec' => $Cons5sec,
			'an_cons30sec' => $Cons30sec,
			'an_acasc' => $Acasc,
			'an_acidez' => $Acidez,
			'an_bar' => $Bar,
			'an_color' => $Color,
			'an_densidad' => $Densidad,
			'an_pnegros' => $Pnegros,
			'an_patulinas' => $Patulina,
			'an_ramacidos' => $Ramacidos,
			'an_hongos' => $Hongos,
			'an_levaduras' => $Levadura,
			'an_ecoli' => $Ecoli,
			'an_coliformes' => $Coliformes,
			'an_hongosterm' => $HongosTerm,
			'an_salmonella' => $Salmonnela,
			'an_alyciclo' => $Alyciclo,
			'an_howardm' => $Howardm,
			'an_generico1' => $Generico_1,
			'an_generico2' => $Generico_2,
			'an_generico3' => $Generico_3,
			'an_generico4' => $Generico_4,
			'an_generico5' => $Generico_5,
			'an_generico6' => $Generico_6,
			'an_generico7' => $Generico_7,
			'an_generico8' => $Generico_8,
			'an_generico9' => $Generico_9,
			'an_generico10' => $Generico_10,
			'an_generico11' => $Generico_11,
			'an_generico12' => $Generico_12,
			'an_generico13' => $Generico_13,
			'an_generico14' => $Generico_14,
			'an_generico15' => $Generico_15,
			'an_generico16' => $Generico_16,
			'an_generico17' => $Generico_17,
			'an_generico18' => $Generico_18,
			'an_generico19' => $Generico_19,
			'an_generico20' => $Generico_20,
			'an_generico21' => $Generico_21,
			'an_generico22' => $Generico_22,
			'an_generico23' => $Generico_23,
			'an_generico24' => $Generico_24,
			'an_generico25' => $Generico_25

			);
		$this->db->where('an_id', $Id);
		$resultado = $this->db->update('analisis', $data);
		return $resultado;
	}

	function elimina_linea($id){
		$this->db->where('an_id', $id);
		$valor = $this->db->delete('analisis');
		return $valor;
	}

	function cambiaEstado($id,$estado){
		$data = array('an_estado' => $estado);
		$this->db->where('an_id', $id);
		$valor = $this->db->update('analisis', $data);
		return $valor;
	}

	function ingresaAnalisis(
		$Locacion,
		$Articulo,
		$Fecha,
		$Lote,
		$Referencia,
		$Estado,
		$Descripcion,
		$Cliente,
		$Nombre,
		$Cantidad,
		$UM,
		$PH,
		$Brix,
		$Cons5sec,
		$Cons30sec,
		$Acasc,
		$Acidez,
		$Bar,
		$Color,
		$Densidad,
		$Pnegros,
		$Patulina,
		$Ramacidos,
		$Hongos,
		$Levadura,
		$Ecoli,
		$Coliformes,
		$HongosTerm,
		$Salmonnela,
		$Alyciclo,
		$Howardm,
		$Generico_1,
		$Generico_2,
		$Generico_3,
		$Generico_4,
		$Generico_5,
		$Generico_6,
		$Generico_7,
		$Generico_8,
		$Generico_9,
		$Generico_10,
		$Generico_11,
		$Generico_12,
		$Generico_13,
		$Generico_14,
		$Generico_15,
		$Generico_16,
		$Generico_17,
		$Generico_18,
		$Generico_19,
		$Generico_20,
		$Generico_21,
		$Generico_22,
		$Generico_23,
		$Generico_24,
		$Generico_25,
		$usuario

		){

			date_default_timezone_set('Chile/Continental');
			$valor = new DateTime();
			$fecha = $valor->format('Y-m-d');

			$valor2 = new DateTime();
			$fecha2 = $valor2->format('Y-m-d H:i:s');

			if ($usuario == 'ciglesias@purefruitchile.com' || $usuario == 'valerie.valdes@purefruitchile.com') {
				$fecha2 = NULL;
			}

		$data = array(

			'an_locacion' => $Locacion,
			'an_articulo' => $Articulo,
			'an_fecha' => $fecha,
			'an_lote' => $Lote,
			'an_referencia' => $Referencia,
			'an_estado' => $Estado,
			'an_descripcion' => $Descripcion,
			'an_cliente' => $Cliente,
			'an_nombre' => $Nombre,
			'an_cantidad' => $Cantidad,
			'an_um' => $UM,
			'an_ph' => $PH,
			'an_brix' => $Brix,
			'an_cons5sec' => $Cons5sec,
			'an_cons30sec' => $Cons30sec,
			'an_acasc' => $Acasc,
			'an_acidez' => $Acidez,
			'an_bar' => $Bar,
			'an_color' => $Color,
			'an_densidad' => $Densidad,
			'an_pnegros' => $Pnegros,
			'an_patulinas' => $Patulina,
			'an_ramacidos' => $Ramacidos,
			'an_hongos' => $Hongos,
			'an_levaduras' => $Levadura,
			'an_ecoli' => $Ecoli,
			'an_coliformes' => $Coliformes,
			'an_hongosterm' => $HongosTerm,
			'an_salmonella' => $Salmonnela,
			'an_alyciclo' => $Alyciclo,
			'an_howardm' => $Howardm,
			'an_generico1' => $Generico_1,
			'an_generico2' => $Generico_2,
			'an_generico3' => $Generico_3,
			'an_generico4' => $Generico_4,
			'an_generico5' => $Generico_5,
			'an_generico6' => $Generico_6,
			'an_generico7' => $Generico_7,
			'an_generico8' => $Generico_8,
			'an_generico9' => $Generico_9,
			'an_generico10' => $Generico_10,
			'an_generico11' => $Generico_11,
			'an_generico12' => $Generico_12,
			'an_generico13' => $Generico_13,
			'an_generico14' => $Generico_14,
			'an_generico15' => $Generico_15,
			'an_generico16' => $Generico_16,
			'an_generico17' => $Generico_17,
			'an_generico18' => $Generico_18,
			'an_generico19' => $Generico_19,
			'an_generico20' => $Generico_20,
			'an_generico21' => $Generico_21,
			'an_generico22' => $Generico_22,
			'an_generico23' => $Generico_23,
			'an_generico24' => $Generico_24,
			'an_generico25' => $Generico_25,
			'an_usuario' => $usuario,
			'an_qad' => "NO",
			'an_qad_cliente' => "NO",
			'an_fecha_creacion' => $fecha2,
			'an_inventario' => 2

			);
		$resultado = $this->db->insert('analisis', $data);
		return $resultado;
	}

	function ingresanAnalisis($datos){

		date_default_timezone_set('Chile/Continental');
		$valor = new DateTime();

		$arreglo = array();
		$largo = 8;
		$referencias = '';
		$largo_necesitado = 0;
		$ceros = '';
		$fecha ='';
		for ($i=$datos[1]; $i <= $datos[2] ; $i++) {
			var_dump($datos[4],"<--modelo");

			$date = str_replace('/', '-', $datos[4]);
			$fecha = date('Y-m-d', strtotime($date));

			$largo_necesitado = $largo - strlen($datos[0]);
			$referencia = $largo_necesitado-strlen($i);

			for ($j=1; $j <= $referencia; $j++) {
				$ceros.=0;
			}

			$fecha_creacion = $valor->format('Y-m-d H:i:s');

			$query = 'insert into analisis (an_referencia,an_lote,an_inventario,an_fecha,an_fecha_creacion,an_qad,an_qad_cliente) values("'.$datos[0].$ceros.$i.'", "'.$datos[3].'", 2, "'.$fecha.'", "'.$fecha_creacion.'", "NO", "NO")';
			// var_dump("Referencias: ".$referencia. " Prefijo: ".$datos[0]. " Ceros: ".$ceros);
			// var_dump($query);
			$ceros = '';
			if ($this->db->query($query)) {
				array_push($arreglo, $datos[0].$i);
			}
		}
		array_push($arreglo, $datos[3]);

		return $arreglo;
	}//FIN FUNCTION

}

/* End of file modelo.php */
/* Location: ./application/models/modelo.php */
