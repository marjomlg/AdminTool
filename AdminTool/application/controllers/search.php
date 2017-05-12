<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('brand');
    }

    public function index()
    {
        $this->load->view('brand/search_view');
    }

    public function execute_search()
    {   
        if($this->session->userdata('logged_in')){

         $delimiters['keyword'] = $this->input->get('keyword');


        if($delimiters['keyword']!=null){
            $config = array();
                $delimiters['keyword'] = $this->input->get('keyword');
                $config['first_url'] = base_url() . 'brand/search?keyword=' . $delimiters['keyword'];
                $config["base_url"] = base_url() . 'brand/search';
                $config['suffix']      = '?keyword=' . $delimiters['keyword'];
                $config["total_rows"] = $this->brand->search_count($delimiters['keyword']);
                        

                include APPPATH.'config/pagination.php';
               
                $this->pagination->initialize($config);
         
                $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                $data['brand'] = $this->brand->get_search($config["per_page"], $page,$delimiters['keyword']);
                $data["links"] = $this->pagination->create_links();
         
                    
                
        }else{
            $data['products'] = array();
            $data['links'] = NULL;
            
        }

        $this->load->view('brand/search',$data);

        }else{
                redirect(base_url(''));
            }   
    }


}