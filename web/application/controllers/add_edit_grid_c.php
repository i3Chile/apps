<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_edit_grid_c extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
    
    public function index($accion='',$id=0){
        
        $datos['accion'] = $accion == 'ins' 
                        ? 'Agregar nuevo registro..'
                        : 'Editar registro existente.. id:['.$id.']';
        
        // cargamos  la interfaz
        $this->load->view('add_edit_grid_v', $datos);
    }
}
?>
