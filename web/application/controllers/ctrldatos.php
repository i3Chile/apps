<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CtrlDatos extends CI_Controller {

	public function index()
	{
		$This->load-> library ('session');
		$this->load->model("modelo");
		$this->Usuario->setRut($this->session->userdata('rut'));
		$r=$this->Usuario->cargar();
		  foreach ($r->result() as $row) {
           
		$misdato=array('nombre'=>$r->Nombre,
						'apellido'=>$row->Apellido,
						'rut'=>$row->Rut,
						'Email'=>$row->Apellido,
						'profecion'=>$row->Profecion,
						'fecha'=>$row->FechaNacimiento,
						'estado'=>$row->EstadoCivil,
						'empresa'=>$row->Empresa
						);
			$this->load->view("datos",$misdato);
                }

	}

	public function Actualizar(){
		//$this->load->library('form_validation');
		//$this->form_validation->set_rules('user', 'uswer', 'required');
		//$this->form_validation->set_rules('pass', 'pass','required|min_length[5]');
		$this->load->model("Usuario");
                $this->Usuario->setNombre($this->input->post('nombre'));
                $this->Usuario->setRut($this->input->post('rut'));
                $this->Usuario->setApellido($this->input->post('apellido'));
                $this->Usuario->setFecha_nacimiento($this->input->post('fecha'));
                $this->Usuario->setProfecion($this->input->post('profe'));
                $this->Usuario->setEstado_civil($this->input->post('estado'));
                $this->Usuario->setEmpresa($this->input->post('empresa'));
                $this->Usuario->setEmail($this->input->post('email'));
                $r=$this->Usuario->Actualizar();
		if($r==true){
			$this->load->view("Actividad");
		}
	}
}
?>