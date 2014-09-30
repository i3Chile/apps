<?php
class Trabajador extends CI_Model {
    private $rut,$id,$nombre,$apellido,$email,$cargo;
    public function getRut() {
        return $this->rut;
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function setRut($rut) {
        $this->rut = $rut;
    }

    
    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    //metodo guardar
     public function Guardar(){
        $data = array(
            'IDActividad' => $this->id,
            'Nombre' => $this->nombre,
            'Apellido' => $this->apellido,
            'Email' => $this->email,
            'Cargo' => $this->cargo
        );
        $this->db->insert('trabajador', $data);
       $ri= $This-> db-> insert_id ();
        return $ri;
         
         
         
     }

     public function Actualizar(){
        $data = array(
            'IDActividad' => $this->id,
            'Nombre' => $this->nombre,
            'Apellido' => $this->apellido,
            'Email' => $this->email,
            'Cargo' => $this->cargo
        );
        $this->db->where('IdActividad', $this->id);
        $this->db->update('trabajador', $data);
        return $ri;
         
         
         
     }
      public function contar() {
        $this->db->where('IDActividad', $this->id);
        $query = $this->db->get('trabajador');
        return $query->num_rows();
        
    }
    
}
