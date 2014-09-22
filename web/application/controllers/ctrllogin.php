<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class CtrlLogin extends CI_Controller {

    public function index() {
        
        $this->load->view("actividad");
    }

    public function login() {
        //$this->load->library('form_validation');
        //$this->form_validation->set_rules('user', 'user', 'required');
        //$this->form_validation->set_rules('pass', 'pass','required|min_length[5]');
        $this->load->library('session');
        $this->load->model("Usuario");
        $this->Usuario->setEmail($this->input->post('user'));
        $this->Usuario->setPassword($this->input->post('pass'));
        $r = $this->Usuario->Login();
        if ($r == true) {
            $this->Usuario->setRut($this->session->userdata('rut'));
            $ro = $this->Usuario->cargar();
            foreach ($ro->result() as $row) {
                $misdato = array('nombre' => $row->Nombre,
                    'apellido' => $row->Apellido,
                    'rut' => $row->Rut,
                    'email' => $row->Email,
                    'profecion' => $row->Profesion,
                    'fecha' => $row->FechaNacimiento,
                    'estado' => $row->EstadoCivil,
                    'empresa' => $row->Empresa,
                    'respuesta'=>''
                );
            }
            $this->load->view("datos", $misdato);
            //$this->load->view("actividad");
        } else {
             
             $this->load->view("login");
        }
    }
    public function registro() {
        //$this->load->library('form_validation');
        //$this->form_validation->set_rules('user', 'user', 'required');
        //$this->form_validation->set_rules('pass', 'pass','required|min_length[5]');
        $this->load->model("Usuario");
        $this->Usuario->setEmail($this->input->post('user'));
        $this->Usuario->setPassword($this->input->post('pass1'));
        $this->Usuario->setRut($this->input->post('rut'));
        $r = $this->Usuario->Registro();
        if ($r == true) {
            
            $this->load->view("login");
        } else {
            $this->load->view("login");
        }
    }
}
