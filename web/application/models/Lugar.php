<?php

class Lugar extends CI_Model {

    private $id, $nombre, $riesgo, $cordenada, $direccion;

//direccion
    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function getDireccion() {
        return $this->direccion;
    }

// cordenada
    public function setCordenada($cordenada) {
        $this->cordenada = $cordenada;
    }

    public function getCordenada() {
        return $this->cordenada;
    }

//id
    public function getId() {
        return $this->id;
    }

    public function setId($valor) {
        $this->id = $valor;
    }

//nombre
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($valor) {
        $this->nombre = $valor;
    }

//riesgo
    public function getRiesgo() {
        return $this->riesgo;
    }

    public function setRiesgo($valor) {
        $this->riesgo = $valor;
    }

//metodo cargar()
    public function Cargar() {

        $this->db->where('id', $this->email);
        $query = $this->db->get('usuario');
        $sw = 0;
        foreach ($query->result() as $row) {
            $this->nombre = $row->EMAIL;
            $sw = 1;
        }

        if ($sw == 1) {
            return true;
        } else {
            return false;
        }
    }


//metodo guardar
     public function Guardar(){
        $data = array(
            'Nombre' => $this->nombre,
            'Riesgo' => $this->riesgo,
            'Cordenada' => $this->cordenada,
            'Direccion' => $this->direccion
        );
        $this->db->insert('lugar', $data);  
       
        return $this->db->insert_id();
     }

        public function Actualizar(){
                $data = array(
                    'Nombre' => $this->nombre,
                    'Riesgo' => $this->riesgo,
                    'Cordenada' => $this->cordenada,
                    'Direccion' => $this->direccion
                );
                $this->db->insert('lugar', $data);  

                return $this->db->insert_id();
             }
}

?>
?>

