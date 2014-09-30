<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class CtrlLogin extends CI_Controller {

    public function index() {
        $this->load->view("login");
    }

    public function login() {
        $this->load->library('form_validation');
       // $this->form_validation->set_rules('user', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('pass', 'Clave', 'required');
        if ($this->form_validation->run() === false) {
            $this->load->view('login');
          
        }
        //Los datos son correctos
        else {
            //Los datos no son correctos

            $this->load->library('session');
            $this->load->model("Usuario");
            $this->Usuario->setEmail($this->input->post('user'));
            $this->Usuario->setPassword($this->input->post('pass'));
            $r = $this->Usuario->Login();
            if ($r == true) {
                $this->load->library('pagination'); //cargamos la libreria de paginacion
                $this->load->library('table'); //cargamos la libreria para el manejo de tablas
                $this->load->model('Actividad'); //cargamos el archivo usuario_model.php
                $this->Actividad->setrut($this->session->userdata('rut'));

                $config['base_url'] = '/crlusuario/index/';  //establecemos la URL para las paginas
                $config['total_rows'] = $this->Actividad->contar();  //llamo a una funcion del modelo que me retorna la cantidad de usuarios que tengo en la tabla usuario.
                $config['per_page'] = '5'; //cantidad de filas a mostrar por pagina

                $this->pagination->initialize($config); // le paso el vector con mis configuraciones al paginador
                //llamo a la funcion get_usuarios que me retorna el resultado de la consulta SQL con los datos.
                $data['results'] = $this->Actividad->ver($config['per_page'], $this->uri->segment(3));

                //obtengo los usuarios ordenados descendientemente por el id
                $data['usuario'] = $this->Actividad->orden('Id', 'desc');

                //$this->load->view('usuario', $data);
                $this->load->view('Actividad');
                
            } else {

                $this->load->view("login");
            }
        }
    }

    public function registro() {
        $this->load->library('form_validation');
         $this->form_validation->set_rules('email1', 'ingrerse su email', 'required|valid_email|is_unique[usuario.Email]|validar_rut');
        $this->form_validation->set_rules('rut', 'Rut', 'required|valid_email|is_unique[usuario.Rut]|validar_rut');
        $this->form_validation->set_rules('rut', 'Ingrese su clave', 'required|min_length[8]|max__length[9]');
        
        if ($this->form_validation->run() === false) {
            $this->load->view('login');
        }
        //Los datos son correctos
        else {

            $this->load->model("Usuario");
            $this->Usuario->setEmail($this->input->post('email1'));
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

}