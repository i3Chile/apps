<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CtrlLogin extends CI_Controller {

	public function index()
	{
		$This->load-> library ('session');
		$this->load->model("modelo");
		$this->Usuario->setRut($this->session->userdata('rut'));
		$r=$this->Usuario->cargar();
		foreach($r as $obj){
		$misdato=array('nombre'=>$r->Nombre,
						'apellido'=>$r->Apellido,
						'rut'=>$r->Rut,
						'Email'=>$r->Apellido,
						'profecion'=>$r->Profecion,
						'fecha'=>$r->FechaNacimiento,
						'estado'=>$r->EstadoCivil,
						'empresa'=>$r->Empresa
						);
			$this->load->view("datos",$misdato);
                }

	}

	public function Actualizar(){
		//$this->load->library('form_validation');
		//$this->form_validation->set_rules('user', 'uswer', 'required');
		//$this->form_validation->set_rules('pass', 'pass','required|min_length[5]');
		$this->load->model("Usuario");
                
		$this->Usuario->setEmail($this->input->post('user'));
		$this->Usuario->setPassword($this->input->post('pass'));
		$r=$this->Usuario->cargar();
		if($r==true){
			$this->load->view("usuario");
		}
	}
}
?>