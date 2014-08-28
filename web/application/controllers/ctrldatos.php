<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CtrlLogin extends CI_Controller {

	public function index()
	{
			$this->load->view("login");

	}

	public function login(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user', 'uswer', 'required');
		$this->form_validation->set_rules('pass', 'pass','required|min_length[5]');
		$this->load->model("Usuario");
		$this->Usuario->setEmail($this->input->post('user'));
		$this->Usuario->setPassword($this->input->post('pass'));
		$r=$this->Usuario->cargar();
		if($r==true){
			$this->load->view("usuario");

		}
	}
}