<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class CtrlActividad extends CI_Controller {

    public function index() {
        $this->load->view("actividad");
    }

    public function guardar() {

        //$this->load->library('form_validation');
        //$this->form_validation->set_rules('user', 'user', 'required');
        $this->load->model("lugar");

        $this->lugar->setNombre($this->input->post('lugar'));
        $id = $this->lugar->guardar();
        $this->load->model("Actividad");
        $this->Actividad->setLugar($id);
        $this->Actividad->setNombre($this->input->post('nombre1'));
        $this->Actividad->setFecha($this->input->post('fecha'));
        $this->Actividad->setRiesgo($this->input->post('riesgos'));
        $this->Actividad->setRut($this->session->userdata('rut'));
        $id = $this->Actividad->Crear();

        $this->load->model("Epp");
        $this->Epp->setId($id);
        $this->Epp->setCasco($this->input->post('casco'));
        $this->Epp->setGuante($this->input->post('guante'));
        $this->Epp->setAntiparra($this->input->post('antiparra'));
        $this->Epp->setZapatos($this->input->post('zapato'));
        $this->Epp->setOtros($this->input->post('otro'));
        $this->Epp->setOtrosc($this->input->post('otroc'));
        $this->Epp->setMascarilla($this->input->post('mascarilla'));
        $this->Epp->Guardar();

        
          $this->load->model("Trabajador");
          $nombre=$this->input->post('nombre');
          $cargo=$this->input->post('cargo');
          for ($i=0;$i<=count($nombre);$i++){
          $this->Trabajador->getNombre($nombre[$i]);
          $this->Trabajador->getCargo($cargo[$i]);
          $this->Trabajador->getCargo($cargo[$i]);
          $this->Trabajador->Guardar();
          }

         
    }

    
     public function Datos() {
        $This->load->library('session');
        $this->load->model("modelo");
        $this->Usuario->setRut($this->session->userdata('rut'));
        $r = $this->Usuario->cargar();
        foreach ($r->result() as $row) {

            $misdato = array('nombre' => $r->Nombre,
                'apellido' => $row->Apellido,
                'rut' => $row->Rut,
                'Email' => $row->Apellido,
                'profecion' => $row->Profecion,
                'fecha' => $row->FechaNacimiento,
                'estado' => $row->EstadoCivil,
                'empresa' => $row->Empresa
            );
            $this->load->view("datos", $misdato);
        }
    }

    
      public function Usuario()
    {
            $this->load->library('pagination'); //cargamos la libreria de paginacion
            $this->load->library('table'); //cargamos la libreria para el manejo de tablas
            $this->load->model('Actividad'); //cargamos el archivo usuario_model.php
            $this->Actividad->setrut($this->session->userdata('rut'));
            
            $config['base_url'] ='/crlusuario/index/';  //establecemos la URL para las paginas
            $config['total_rows'] = $this->Actividad->contar();  //llamo a una funcion del modelo que me retorna la cantidad de usuarios que tengo en la tabla usuario.
            $config['per_page'] = '5'; //cantidad de filas a mostrar por pagina
            
            $this->pagination->initialize($config); // le paso el vector con mis configuraciones al paginador
            //llamo a la funcion get_usuarios que me retorna el resultado de la consulta SQL con los datos.
            $data['results'] = $this->Actividad->ver($config['per_page'], $this->uri->segment(3));

            //obtengo los usuarios ordenados descendientemente por el id
            $data['usuario'] = $this->Actividad->orden('Id', 'desc');

            $this->load->view('usuario', $data); //cargo la vista usuario_index y le paso el vector

    }
}
