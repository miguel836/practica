<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {

public function __construct(){
parent::__construct();
$this->load->model('medico');
}

	public function index()

{$data["listadoMedicos"]=
	$this->medico->getAll();
	$data["listadoMasculinos"]=
	$this->medico ->getAll('MASCULINO');
	$data["listadoFemeninos"]=
	$this->medico ->getAll('FEMENINO');

	$data["listadoActivos"]=
	$this->medico ->getAct('ACTIVO');
	$data["listadoInactivos"]=
	$this->medico ->getAct('INACTIVO');


	$data["listadoReumatologias"]=
	$this->medico ->getEsp('REUMATOLOGIA');
	$data["listadoCirugias_generales"]=
	$this->medico ->getEsp('CIRUGIA GENERAL');
	$data["listadoPsiquiatrias"]=
	$this->medico ->getEsp('PSIQUIATRIA');
	$data["listadoMedicinas_generales"]=
	$this->medico ->getEsp('MEDICINA GENERAL');


	$data["listadoAspirinas"]=
	$this->medico ->getMedi('ASPIRINA');
	$data["listadoParacetamoles"]=
	$this->medico ->getMedi('PARACETAMOL');
	$data["listadoOmeprazoles"]=
	$this->medico ->getMedi('OMEPRAZOLL');
	$data["listadoCarisoprodoles"]=
	$this->medico ->getMedi('CARISOPRODOL');
	$data["listadoDiazepamales"]=
	$this->medico ->getMedi('DIAZEPAM');
	$data["listadoIbuprofenos"]=
	$this->medico ->getMedi('IBUPROFENO');
	$data["listadoTratamientos"]=
	$this->medico ->getTot('TRATAMIENTO');

	$data["listadoReuniones_internas"]=
	$this->medico ->getReu('REUNION INTERNA');
	$data["listadoReuniones_externas"]=
	$this->medico ->getReu('REUNION EXTERNA');
	$data["listadoReuniones_formales"]=
	$this->medico ->getReu('REUNION FORMAL');
	$data["listadoReuniones_oficiales"]=
	$this->medico ->getReu('REUNION OFICIAL');

	$data["listadoInmunoterapias"]=
	$this->medico ->getTra('INMUNOTERAPIA');
	$data["listadoQuimioterapias"]=
	$this->medico ->getTra('QUIMIOTERAPIA');
	$data["listadoTerapias_fotodinamicas"]=
	$this->medico ->getTra('TERAPIA FOTODINAMICA');
	$data["listadoTerapias_de_hipertermias"]=
	$this->medico ->getTra('TERAPIA HIPERTERMIAS');

	$data["listadoAzuayes"]=
	$this->medico ->getPro('AZUAY');
	$data["listadoPichinchas"]=
	$this->medico ->getPro('PICHINCHA');
	$data["listadoCotopaxis"]=
	$this->medico ->getPro('COTOPAXI');
	$data["listadoChimborazos"]=
	$this->medico ->getPro('CHIMBORAZO');

	$data["listadoPacientes"]=
		$this->medico->getAll();
		$data["listadoMasculinos"]=
		$this->medico ->getAll('MASCULINO');
		$data["listadoFemeninos"]=
		$this->medico ->getAll('FEMENINO');

		$this->load->view('header');
		$this->load->view('welcome_message',
		$data);
		$this->load->view('footer');
	}
}
