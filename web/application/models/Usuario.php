<?php

class Usuario extends CI_Model {

    private $rut, $email, $pass, $nombre, $apellido, $fecha_nacimiento, $profecion, $estadocivil, $empresa;

//rut
    public function getRut() {
        return $this->rut;
    }

    public function setRut($valor) {
        $this->rut = $valor;
    }

//email
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($valor) {
        $this->email = $valor;
    }

//password
    public function getPassword() {
        return $this->pass;
    }

    public function setPassword($valor) {
        $this->pass = $valor;
    }

//nombre
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($valor) {
        $this->nombre = $valor;
    }

//apellido
    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($valor) {
        $this->apellido = $valor;
    }

//fecha nacimiento
    public function getFecha_nacimiento() {
        return $this->fecha_nacimiento;
    }

    public function setFecha_nacimiento($valor) {
        $this->fecha_nacimiento = $valor;
    }

//profecion
    public function getProfecion() {
        return $this->profecion;
    }

    public function setProfecion($valor) {
        $this->profecion = $valor;
    }

//estado civil
    public function getEstado_civil() {
        return $this->estadocivil;
    }

    public function setEstado_civil($valor) {
        $this->estadocivil = $valor;
    }

//empresa
    public function getEmpresa() {
        return $this->empresa;
    }

    public function setEmpresa($valor) {
        $this->empresa = $valor;
    }

//metodo login
    public function Login() {

        $this->load->library('session');
        $this->db->where('Email', $this->email);
        $this->db->where('Clave', $this->pass);
        $query = $this->db->get('usuario');
        $sw = 0;
        foreach ($query->result() as $row) {
            $sw = 1;
             
            $this->session->set_userdata('rut', $row->Rut);
        }

        if ($sw == 1) {
            return true;
        } else {
            return false;
        }
    }

//metodo registro
    public function Registro() {
//validar email 
        $this->db->where('Email', $this->email);
        $query = $this->db->get('usuario');
        $sw = 0;
        foreach ($query->result() as $row) {
            $sw = 1;
        }
        if ($sw == 1) {
            echo "el Email ya existe";
            exit();
        }

//validar clave
        $this->db->where('Clave', $this->pass);
        $query = $this->db->get('usuario');
        $sw = 0;
        foreach ($query->result() as $row) {
            $sw = 1;
        }
        if ($sw == 1) {
            echo "el clave ya existe";
            exit();
        }

//ingresar datos a la tabla usuario
        $data = array(
            'Email' => $this->email,
            'Clave' => $this->pass,
            'Rut' => $this->rut
        );

        $this->db->insert('usuario', $data);
        return true;
    }

//metodo actualizar datos
    public function Actualizar() {
        $data = array(
            'Nombre' => $this->nombre,
            'Apellido' => $this->apellido,
            'Rut'=>$this->rut,
            'FechaNacimiento' => $this->fecha_nacimiento,
            'Profesion' => $this->profecion,
            'EstadoCivil' => $this->estadocivil,
            'Empresa' => $this->empresa,
            'email' => $this->email
        );

        $this->db->where('Rut', $this->rut);
        $this->db->update('Usuario', $data);
        return true;
    }

//metodo cargar datos
    public function Cargar() {

        $this->db->where('Rut', $this->rut);
        $query = $this->db->get('usuario');
       
            return $query;
        
    }

}
