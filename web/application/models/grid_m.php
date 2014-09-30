<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grid_m extends CI_Model {
    public function __construct(){
        parent::__construct();
        //$this->load->database('SGA');    
    }

    function eliminar_registros($items){
        
        if(empty($items)) return false;
        
        // eliminamos espacios en blancos y comas al final de la cadena
        $items    = rtrim($items,",");
        $arrItems = explode(',',$items);
        
        $this->db->where_in('id',$arrItems);// WHERE id IN ($items)
        $this->db->delete('epp');
        $this->db->where_in('id',$arrItems);// WHERE id IN ($items)
        $this->db->delete('trabajador');
        $this->db->where_in('id',$arrItems);// WHERE id IN ($items)
        $lugar=$this->db->get('actividad');
        $this->db->where_in('id',$arrItems);// WHERE id IN ($items)
        $this->db->delete('actividad');
        $this->db->where('id',$lugar);// WHERE id IN ($items)
        $this->db->delete('lugar');
        return json_encode(array('total'=>$this->db->affected_rows()));
    }
    
    function eliminar_todo(){
        
        //$this->db->empty_table('country'); // elimina los registros uno por uno ..
        $this->db->truncate('epp');
        $this->db->truncate('trabajador'); 
        $this->db->truncate('actividad');
        $this->db->truncate('lugar');
// borra la tabla y la recrea de nuevo 
        return true;
    }
    
    function _get_total($query='',$qtype='',$letter_pressed='Mostrar todo'){
     
        # ----------------------------------------------------------------------
        # si se usan las opciones de filtro
        if(!empty($qtype) and $letter_pressed<>'Mostrar todo'){
            
            // caso: se esta usando el buscador
            if($query!='')
                $this->db->like($qtype,$query);// WHERE campo LIKE %valor%  

            // caso: se filtra por letra
            elseif($letter_pressed!='')// WHERE campo LIKE valor%  
                $this->db->like($qtype,$letter_pressed, 'after');

            // caso: se filtra por titulo
            elseif($letter_pressed=='#')// WHERE campo REGEXP '[[:digit:]]' 
                $this->db->where($qtype, " REGEXP '[[:digit:]]' ");
        }#----------------------------------------------------------------------
        # la opcion (Mostrar todo) por defecto no aplicara filtro    
        
        $this->db->from('Actividad');
        return $this->db->count_all_results();
    }

    // devuelve en formato JSON los datos ..
    function get_json($query,$qtype,$letter_pressed,$page
                ,$rp,$sortname,$sortorder){

        // obtenemos el total de registros solicitados..
        $total = $this->_get_total($query,$qtype,$letter_pressed);
        
        // numero de pagina por defecto 1
        $page = (int)(empty($page) ? 1 : $page);

        // numero de registros a mostrar, por defecto 10
        $rp = (int)(empty($rp) ? 10 : $rp);

        // desde donde comenzar
        $start = (($page-1) * $rp);

        // ordenar por X campo
        $sortname = empty($sortname) ? 'name' : $sortname;

        // orden ascendente o descendente
        $sortorder = empty($sortorder) ? 'desc' : $sortorder;
        
        // armamos la consulta
        $this->db->select('id, iso, name, printable_name, iso3, numcode');
        $this->db->from('actividad');
        
        # ----------------------------------------------------------------------
        # si se usan las opciones de filtro
        if(!empty($qtype) and $letter_pressed<>'Mostrar todo'){
            
            // caso: se esta usando el buscador
            if($query!='')
                $this->db->like($qtype,$query);// WHERE campo LIKE %valor%  

            // caso: se filtra por letra
            elseif($letter_pressed!='')// WHERE campo LIKE valor%  
                $this->db->like($qtype,$letter_pressed, 'after');

            // caso: se filtra por titulo
            elseif($letter_pressed=='#')// WHERE campo REGEXP '[[:digit:]]' 
                $this->db->where($qtype, " REGEXP '[[:digit:]]' ");
        }#----------------------------------------------------------------------

        $this->db->limit($rp, $start);
        $this->db->order_by($sortname, $sortorder);
        $query = $this->db->get();

       // echo $this->db->last_query();exit;
        
        // si hay resultados
        if ($query->num_rows()>0){

            // arrmamos un array con los datos a codificar
            $arrDatos = array(
                'page'  => $page,
                'total' => $total
            );
        
            foreach($query->result() as $row){

                $arrDatos['rows'][] = array(
                    'id'   => htmlspecialchars($row->id,ENT_QUOTES),
                    'cell' => array(
                            htmlspecialchars($row->id,ENT_QUOTES),
                            htmlspecialchars($row->iso,ENT_QUOTES),
                            htmlspecialchars($row->name,ENT_QUOTES),
                            htmlspecialchars($row->printable_name,ENT_QUOTES),
                            htmlspecialchars($row->iso3,ENT_QUOTES),
                            htmlspecialchars($row->numcode,ENT_QUOTES)
                    )
                );
            }#end foreach
            
            $query->free_result();
            return json_encode($arrDatos);
        }
    }
}
?>