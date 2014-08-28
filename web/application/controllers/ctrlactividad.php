<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CtrlActovidad extends CI_Controller {

	public function index()
	{
			$this->load->view("actividad");

	}

	public function guardar(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user', 'user', 'required');
	
		$this->load->model("Usuario");
		$this->Usuario->setEmail($this->input->post('user'));
		$this->Usuario->setPassword($this->input->post('pass'));
		$r=$this->Usuario->cargar();
		if($r==true){
			$this->load->view("usuario");

		}
	}
}