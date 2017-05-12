<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('form');

        $this->load->model('search');
    }

    public function index()
    {
        $this->load->view('search');
    }

    public function execute_search()
    {
        // Retrieve the posted search term.
        $search_term = $this->input->post('search');

        // Use a model to retrieve the results.
        $data['results'] = $this->search->get_results($search_term);

        // Pass the results to the view.
        $this->load->view('view_search',$data);
    }

}