<?php
    defined("BASEPATH") OR exit ('No direct script allowed');

    class Search extends CI_Controller{

      function __construct(){
    		parent::__construct();
    		$this->load->model('m_data');
    		$this->load->helper('url');
    	}

      public function index(){
        $keywords = $this->input->get('keywords');
        if(!$keywords){
          redirect(base_url());
        }
        else{
          $this->load->database();
      		$jumlah_data = $this->m_data->jumlah_data();
      		$this->load->library('pagination');
      		$config['base_url'] = base_url().'search?keywords='.$keywords;
      		$config['total_rows'] = $jumlah_data;
      		$config['per_page'] = 8;

      		$config['full_tag_open'] = '<ul class="pagination justify-content-center">';
      		$config['full_tag_close'] = '</ul>';
      		$config['attributes'] = ['class' => 'page-link'];
      		$config['first_link'] = false;
      		$config['last_link'] = false;
      		$config['first_tag_open'] = '<li class="page-item">';
      		$config['first_tag_close'] = '</li>';
      		$config['prev_link'] = '&laquo';
      		$config['prev_tag_open'] = '<li class="page-item">';
      		$config['prev_tag_close'] = '</li>';
      		$config['next_link'] = '&raquo';
      		$config['next_tag_open'] = '<li class="page-item">';
      		$config['next_tag_close'] = '</li>';
      		$config['last_tag_open'] = '<li class="page-item">';
      		$config['last_tag_close'] = '</li>';
      		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
      		$config['cur_tag_close'] = '<span class="sr-only"></span></a></li>';
      		$config['num_tag_open'] = '<li class="page-item">';
      		$config['num_tag_close'] = '</li>';

      		$from = $this->uri->segment(3);
      		$this->pagination->initialize($config);
      		$data['lagu'] = $this->m_data->searchdata($config['per_page'], $from, $keywords);
      		$this->load->view('search_view',$data);
        }
      }

    }
?>
