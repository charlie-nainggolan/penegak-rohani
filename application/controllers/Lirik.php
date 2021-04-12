<?php
    defined('BASEPATH') OR exit ('No direct script access allowed');

    class Lirik extends CI_Controller{

      function __construct(){
    		parent::__construct();
    		$this->load->model('m_data');
    		$this->load->helper('url');
    	}

    public function lihat(){
      $id_lagu = $this->uri->segment('3');
      $this->load->database();
      $data['lirik'] = $this->m_data->lihat_lirik($id_lagu);
      $this->load->view('view_lirik',$data);
    }
    }
?>
