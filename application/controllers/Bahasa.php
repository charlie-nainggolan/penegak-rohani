<?php
    defined('BASEPATH') OR exit ('No direct script access allowed');

    class Bahasa extends CI_Controller{

      function __construct(){
    		parent::__construct();
    		$this->load->model('m_data');
    		$this->load->helper('url');
    	}

      public function indonesia(){
        $this->load->database();
    		$jumlah_data = $this->m_data->jumlah_data();
    		$this->load->library('pagination');
    		$config['base_url'] = base_url().'bahasa/indonesia/';
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
    		$data['lagu'] = $this->m_data->indonesia($config['per_page'], $from);
    		$this->load->view('indonesia_view',$data);
      }

      public function tapanuli(){
        $this->load->database();
    		$jumlah_data = $this->m_data->jumlah_data();
    		$this->load->library('pagination');
    		$config['base_url'] = base_url().'bahasa/tapanuli/';
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
    		$data['lagu'] = $this->m_data->tapanuli($config['per_page'], $from);
    		$this->load->view('tapanuli_view',$data);
      }

      public function nias(){
        $this->load->database();
    		$jumlah_data = $this->m_data->jumlah_data();
    		$this->load->library('pagination');
    		$config['base_url'] = base_url().'bahasa/nias/';
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
    		$data['lagu'] = $this->m_data->nias($config['per_page'], $from);
    		$this->load->view('nias_view',$data);
      }

      public function pakpak(){
        $this->load->database();
    		$jumlah_data = $this->m_data->jumlah_data();
    		$this->load->library('pagination');
    		$config['base_url'] = base_url().'bahasa/pakpak/';
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
    		$data['lagu'] = $this->m_data->pakpak($config['per_page'], $from);
    		$this->load->view('pakpak_view',$data);
      }

    }
?>
