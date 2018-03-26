<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('modelo');
	}

	public function index()
	{
		$this->load->view('index');
	}


	function listar_analisis(){
		$valor = $this->modelo->listar_analisis();
		echo json_encode($valor);
	}

	function actualiza_linea(){
		$Id = $this->input->post("Id");
		$Locacion = $this->input->post("Locacion");
		$Articulo = $this->input->post("Articulo");
		$Fecha = $this->input->post("Fecha");
		$Lote = $this->input->post("Lote");
		$Referencia = $this->input->post("Referencia");
		$Estado = $this->input->post("Estado");
		$Descripcion = $this->input->post("Descripcion");
		$Cliente = $this->input->post("Cliente");
		$Nombre = $this->input->post("Nombre");
		$Cantidad = $this->input->post("Cantidad");
		$UM = $this->input->post("UM");
		$PH = $this->input->post("PH");
		$Brix = $this->input->post("Brix");
		$Cons5sec = $this->input->post("Cons5sec");
		$Cons30sec = $this->input->post("Cons30sec");
		$Acasc = $this->input->post("Acasc");
		$Acidez = $this->input->post("Acidez");
		$Bar = $this->input->post("Bar");
		$Color = $this->input->post("Color");
		$Densidad = $this->input->post("Densidad");
		$Pnegros = $this->input->post("Pnegros");
		$Patulina = $this->input->post("Patulina");
		$Ramacidos = $this->input->post("Ramacidos");
		$Hongos = $this->input->post("Hongos");
		$Levadura = $this->input->post("Levadura");
		$Ecoli = $this->input->post("Ecoli");
		$Coliformes = $this->input->post("Coliformes");
		$HongosTerm = $this->input->post("HongosTerm");
		$Salmonnela = $this->input->post("Salmonnela");
		$Alyciclo = $this->input->post("Alyciclo");
		$Howardm = $this->input->post("Howardm");
		$Generico_1 = $this->input->post("Generico_1");
		$Generico_2 = $this->input->post("Generico_2");
		$Generico_3 = $this->input->post("Generico_3");
		$Generico_4 = $this->input->post("Generico_4");
		$Generico_5 = $this->input->post("Generico_5");
		$Generico_6 = $this->input->post("Generico_6");
		$Generico_7 = $this->input->post("Generico_7");
		$Generico_8 = $this->input->post("Generico_8");
		$Generico_9 = $this->input->post("Generico_9");
		$Generico_10 = $this->input->post("Generico_10");
		$Generico_11 = $this->input->post("Generico_11");
		$Generico_12 = $this->input->post("Generico_12");
		$Generico_13 = $this->input->post("Generico_13");
		$Generico_14 = $this->input->post("Generico_14");
		$Generico_15 = $this->input->post("Generico_15");
		$Generico_16 = $this->input->post("Generico_16");
		$Generico_17 = $this->input->post("Generico_17");
		$Generico_18 = $this->input->post("Generico_18");
		$Generico_19 = $this->input->post("Generico_19");
		$Generico_20 = $this->input->post("Generico_20");
		$Generico_21 = $this->input->post("Generico_21");
		$Generico_22 = $this->input->post("Generico_22");
		$Generico_23 = $this->input->post("Generico_23");
		$Generico_24 = $this->input->post("Generico_24");
		$Generico_25 = $this->input->post("Generico_25");

		$valor = $this->modelo->actualiza_linea(
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
			);
		echo json_encode($valor);
	}

	function elimina_linea(){
		$id = $this->input->post("id");
		$valor = $this->modelo->elimina_linea($id);
		echo json_encode($valor);
	}

	function cambiaEstado(){
		$id = $this->input->post('id');
		$estado = $this->input->post('estado');
		$valor = $this->modelo->cambiaEstado($id, $estado);
		echo json_encode($valor);
	}

	function ingresaAnalisis(){
		$Locacion = $this->input->post('Locacion');
		$Articulo = $this->input->post('Articulo');
		$Fecha = $this->input->post('Fecha');
		$Lote = $this->input->post('Lote');
		$Referencia = $this->input->post('Referencia');
		$Estado = $this->input->post('Estado');
		$Descripcion = $this->input->post('Descripcion');
		$Cliente = $this->input->post('Cliente');
		$Nombre = $this->input->post('Nombre');
		$Cantidad = $this->input->post('Cantidad');
		$UM = $this->input->post('UM');
		$PH = $this->input->post('PH');
		$Brix = $this->input->post('Brix');
		$Cons5sec = $this->input->post('Cons5sec');
		$Cons30sec = $this->input->post('Cons30sec');
		$Acasc = $this->input->post('Acasc');
		$Acidez = $this->input->post('Acidez');
		$Bar = $this->input->post('Bar');
		$Color = $this->input->post('Color');
		$Densidad = $this->input->post('Densidad');
		$Pnegros = $this->input->post('Pnegros');
		$Patulina = $this->input->post('Patulina');
		$Ramacidos = $this->input->post('Ramacidos');
		$Hongos = $this->input->post('Hongos');
		$Levadura = $this->input->post('Levadura');
		$Ecoli = $this->input->post('Ecoli');
		$Coliformes = $this->input->post('Coliformes');
		$HongosTerm = $this->input->post('HongosTerm');
		$Salmonnela = $this->input->post('Salmonnela');
		$Alyciclo = $this->input->post('Alyciclo');
		$Howardm = $this->input->post('Howardm');
		$Generico_1 = $this->input->post('Generico_1');
		$Generico_2 = $this->input->post('Generico_2');
		$Generico_3 = $this->input->post('Generico_3');
		$Generico_4 = $this->input->post('Generico_4');
		$Generico_5 = $this->input->post('Generico_5');
		$Generico_6 = $this->input->post('Generico_6');
		$Generico_7 = $this->input->post('Generico_7');
		$Generico_8 = $this->input->post('Generico_8');
		$Generico_9 = $this->input->post('Generico_9');
		$Generico_10 = $this->input->post('Generico_10');
		$Generico_11 = $this->input->post('Generico_11');
		$Generico_12 = $this->input->post('Generico_12');
		$Generico_13 = $this->input->post('Generico_13');
		$Generico_14 = $this->input->post('Generico_14');
		$Generico_15 = $this->input->post('Generico_15');
		$Generico_16 = $this->input->post('Generico_16');
		$Generico_17 = $this->input->post('Generico_17');
		$Generico_18 = $this->input->post('Generico_18');
		$Generico_19 = $this->input->post('Generico_19');
		$Generico_20 = $this->input->post('Generico_20');
		$Generico_21 = $this->input->post('Generico_21');
		$Generico_22 = $this->input->post('Generico_22');
		$Generico_23 = $this->input->post('Generico_23');
		$Generico_24 = $this->input->post('Generico_24');
		$Generico_25 = $this->input->post('Generico_25');
		$analisis = $this->input->post('analisis');
		$usuario = $this->input->post('usuario');
		$valor = $this->modelo->ingresaAnalisis(
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
			);
		echo json_encode($valor);
	}

}
