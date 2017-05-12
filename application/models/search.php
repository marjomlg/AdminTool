<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Model {

    public function get_results($search_term='default')
    {
        // Use the Active Record class for safer queries.
        $this->db->select('*');
        $this->db->from('brand');
        $this->db->like('id',$search_term);

        // Execute the query.
        $query = $this->db->get();

        // Return the results.
        return $query->result_array();
    }

}