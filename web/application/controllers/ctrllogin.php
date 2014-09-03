<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CtrlLogin extends CI_Controller {

	public function index()
	{
			$this->load->view("login");

	}

	public function login(){
		//$this->load->library('form_validation');
		//$this->form_validation->set_rules('user', 'user', 'required');
		//$this->form_validation->set_rules('pass', 'pass','required|min_length[5]');
		$this->load->model("Usuario");
		$this->Usuario->setEmail($this->input->post('user'));
		$this->Usuario->setPassword($this->input->post('pass'));
		$r=$this->Usuario->Login();
		if($r==true){
			$this->load->view("datos");
		}else{
			echo "maloooooo no sabe";
		}
	}

	public function registro(){
		//$this->load->library('form_validation');
		//$this->form_validation->set_rules('user', 'user', 'required');
		//$this->form_validation->set_rules('pass', 'pass','required|min_length[5]');
		$this->load->model("Usuario");
		$this->Usuario->setEmail($this->input->post('user'));
		$this->Usuario->setPassword($this->input->post('pass1'));
		$this->Usuario->setRut($this->input->post('rut'));
		$r=$this->Usuario->Registro();
		if($r==true){
                    $rt="registro exitoso";
			$this->load->view("login",$rt);
			 
		}else{
                    echo "<scrip>registro fallido</scrip>";
			$this->load->view("login");
			
			}
	}
}