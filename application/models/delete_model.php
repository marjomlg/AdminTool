<?php

class delete_model extends CI_Model{

//function to select all from table name students
function show_product(){
$query = $this->db->get('brand');
$query_result = $query->result();
return $query_result;
}

//function to select particular record from table name students 
function show_brand_id($data){
        $this->db->select('*');
        $this->db->from('brand');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }

//function to Delete selected record from table name students 	
function delete_brand_id($id){
        $this->db->where('id', $id);
        $this->db->delete('brand');   
    }
 
}

?>

