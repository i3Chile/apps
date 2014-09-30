<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class CtrlActividad extends CI_Controller {

    public function index() {
        $this->load->view("actividad");
    }

    public function Actualizar() {

        //$this->load->library('form_validation');
        //$this->form_validation->set_rules('user', 'user', 'required');
        $this->load->model("Epp");
        $this->Epp->setId();
        $this->Epp->setCasco($this->input->post('casco'));
        $this->Epp->setGuante($this->input->post('guante'));
        $this->Epp->setAntiparra($this->input->post('antiparra'));
        $this->Epp->setZapatos($this->input->post('zapato'));
        $this->Epp->setOtros($this->input->post('otro'));
        $this->Epp->setOtrosc($this->input->post('otroc'));
        $this->Epp->setMascarilla($this->input->post('mascarilla'));
        $this->Epp->Actualizar();
        
        /*
          $this->load->model("Trabajador");
          $nombre=$this->input->post('nombre');
          $cargo=$this->input->post('cargo');
          for ($i=0;$i<=count($nombre);$i++){
          $this->Trabajador->getNombre($nombre[$i]);
          $this->Trabajador->getCargo($cargo[$i]);
          $this->Trabajador->Actualizar()
        
          }

         */

        $this->load->model("Actividad");
        $this->Actividad->setLugar($id);
        $this->Actividad->setNombre($this->input->post('nombre1'));
        $this->Actividad->setFecha($this->input->post('fecha'));
        $this->Actividad->setRiesgo($this->input->post('riesgos'));
        $this->Actividad->setRut($this->session->userdata('rut'));
        $id = $this->Actividad->Crear();
        
        
        $this->load->model("lugar");
        $this->lugar->setNombre($this->input->post('lugar'));
        $id = $this->lugar->guardar();
        
       
        /*
          $this->load->model("Trabajador");
          $nombre=$this->input->post('nombre');
          $cargo=$this->input->post('cargo');
          for ($i=0;$i<=count($nombre);$i++){
          $this->Trabajador->getNombre($nombre[$i]);
          $this->Trabajador->getCargo($cargo[$i]);
          }

         */
    }

    public function Editar() {
        
    }

    public function eliminar() {
        
    }

}
