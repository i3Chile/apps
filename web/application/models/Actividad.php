<?php

class Actividad extends CI_Model {

    private $id, $nombre, $fecha, $riesgo, $lugar ,$rut;

    /* function Actividad() {
      require_once 'Lugar.php';
      $this->lugar = new Lugar();

      } */
    public function getRut() {
        return $this->rut;
    }

    public function setRut($rut) {
        $this->rut = $rut;
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

//fecha
    public function getFecha() {
        return $this->fecha;
    }

    public function setFecha($valor) {
        $this->fecha= $valor;
    }

//Riesgo
    public function getRiesgo() {
        return $this->riesgo;
    }

    public function setRiesgo($valor) {
        $this->riesgo = $valor;
    }

//lugar

    public function setLugar($valor) {

        $this->lugar = $valor;
    }

    public function getLugar() {
        return $this->lugar;
    }

//metodo crear()
    public function Crear() {

        $data = array(
            'Nombre' => $this->nombre,
            'Fecha' => $this->fecha,
            'Riesgo' => $this->riesgo,
            'IDlugar' => $this->lugar,
            'RutUsuario'=>  $this->rut
                
        );

        $this->db->insert('Actividad', $data);
        $this->id = $this->db->insert_id();
        return $this->db->insert_id();
        ;
    }
    
   public function Ver() {
       $this->db->where ('RutUsuario' , $this->rut) ;
       $query = $this->db->get('actividad');
       return $query;
   }

}

?>
