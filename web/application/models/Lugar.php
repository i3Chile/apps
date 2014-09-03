<?php

class Lugar extends CI_Model {

	private $id,$nombre,$riesgo;

//id
	public function getId()
	{
		return $this->id;
	}
	public function setId($valor)
	{
		$this->id=$valor;
	}

//nombre
	public function getNombre()
	{
		return $this->nombre;
	}
	public function setNombre($valor)
	{
		$this->nombre=$valor;
	}

//riesgo
	public function getRiesgo()
	{
		return $this->riesgo;
	}
	public function setRiesgo($valor)
	{
		$this->riesgo=$valor;
	}

//metodo cargar()
	public function Cargar(){

		$this->db->where('id', $this->email);
        $query=$this->db->get('usuario');
        $sw=0;
        foreach ($query->result() as $row){
            $this->nombre=$row->EMAIL;
            $sw=1;

        }

		if($sw==1){
			return true;

		}else{
			return false;
		}
	}
    }
        



 ?>