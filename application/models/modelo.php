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
			an_generico10 as Generico_10


			');
		$this->db->order_by('an_id', 'asc');
		$this->db->from('analisis');
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
		$Generico_10
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
			'an_generico10' => $Generico_10

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
		$Generico_10

		){

		$data = array(

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
			'an_generico10' => $Generico_10

			);
		$resultado = $this->db->insert('analisis', $data);
		return $resultado;
	}

}

/* End of file modelo.php */
/* Location: ./application/models/modelo.php */
