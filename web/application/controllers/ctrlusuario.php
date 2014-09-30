<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ctrlusuario extends CI_Controller {
 
     function __construct()
    {
        parent::Controller(); 
        $this->load->helper('url');
    }
    
     public function index()
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
    
    public function Actividad() {
         $this->load->view('actividad');
    }
    
     public function Datos() {
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
    }
    
    
    }
    
