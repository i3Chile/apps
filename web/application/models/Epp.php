<?php

class Epp extends CI_Model {

    private $id,$guante, $casco, $antiparra, $mascarilla, $zapatos, $otros, $otrosc;
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

        public function getGuante() {
        return $this->guante;
    }

    public function getCasco() {
        return $this->casco;
    }

    public function getAntiparra() {
        return $this->antiparra;
    }

    public function getMascarilla() {
        return $this->mascarilla;
    }

    public function getZapatos() {
        return $this->zapatos;
    }

    public function getOtros() {
        return $this->otros;
    }

    public function getOtrosc() {
        return $this->otrosc;
    }

    public function setGuante($guante) {
        $this->guante = $guante;
    }

    public function setCasco($casco) {
        $this->casco = $casco;
    }

    public function setAntiparra($antiparra) {
        $this->antiparra = $antiparra;
    }

    public function setMascarilla($mascarilla) {
        $this->mascarilla = $mascarilla;
    }

    public function setZapatos($zapatos) {
        $this->zapatos = $zapatos;
    }

    public function setOtros($otros) {
        $this->otros = $otros;
    }

    public function setOtrosc($otrosc) {
        $this->otrosc = $otrosc;
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
    public function Guardar() {
       echo $this->otros;
        $rt=$this->otros;
        $rt.='/';
        $rt.=$this->otrosc;
        echo $rt;
        $data = array(
            'IDActividad' => $this->id,
            'Casco' => $this->casco,
            'Guante' => $this->guante,
            'Antiparra' => $this->antiparra,
            'Mascarilla' => $this->mascarilla,
            'Zapatos' => $this->zapatos,
            'Otros' => $rt
                
        );
        $this->db->insert('epp', $data);
        ECHO 'GUARDO EPP';
    }

}
