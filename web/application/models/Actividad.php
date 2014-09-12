<?php

class Actividad extends CI_Model {

    private $id, $nombre, $fecha, $riesgo, $lugar;
    function __construct($id, $nombre, $fecha, $riesgo, $lugar) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->fecha = $fecha;
        $this->riesgo = $riesgo;
        $this->lugar = new Lugar();
        $this->lugar = $lugar;
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
        $this->Fecha = $valor;
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

//metodo crear()
    public function Crear() {
      

        $this->db->insert('Actividad', $data);
        $data = array(
            'Nombre' => $this->nombre,
            'Fecha' => $this->email,
            'Riesgo' => $this->riesgo
        );

        $this->db->insert('Actividad', $data);
    }

}

?>
