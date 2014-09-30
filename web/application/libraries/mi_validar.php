<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of validar_rut
 *
 * @author exequiel
 */
class mi_validar extends CI_Form_validation{
    
    
    
      function __construct($config = array())
     {
          parent::__construct($config);
     }
     
    public function validar_rut($rut) {
        
        if (strpos($rut, "-") == false) {
            $RUT[0] = substr($rut, 0, -1);
            $RUT[1] = substr($rut, -1);
        } else {
            $RUT = explode("-", trim($rut));
        }
        $elRut = str_replace(".", "", trim($RUT[0]));
        $factor = 2;
        for ($i = strlen($elRut) - 1; $i >= 0; $i--):
            $factor = $factor > 7 ? 2 : $factor;
            $suma += $elRut{$i} * $factor++;
        endfor;
        $resto = $suma % 11;
        $dv = 11 - $resto;
        if ($dv == 11) {
            $dv = 0;
        } else if ($dv == 10) {
            $dv = "k";
        } else {
            $dv = $dv;
        }
        if ($dv == trim(strtolower($RUT[1]))) {
            
          
            return true;
        } else {
          
            return false;
            
        }
    }

    //put your code here
}
