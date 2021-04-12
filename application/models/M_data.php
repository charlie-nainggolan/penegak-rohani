<?php


    class M_data extends CI_Model{

      function data($number,$offset){
      // menampilkan seluruh data lagu
      $this->db->from('lagu');
      $this->db->order_by("tanggal", "desc");
      $this->db->limit($number,$offset);
      $query = $this->db->get();
      return $query->result();
      }

      function searchdata($number,$offset,$keywords){
      // menampilkan seluruh data berdasarkan pencarian
      $this->db->from('lagu');
      $this->db->like('judul',$keywords);
      $this->db->or_like('lirik',$keywords); 
      $this->db->order_by("tanggal", "desc");
      $this->db->limit($number,$offset);
      $query = $this->db->get();
      return $query->result();
      }

      function indonesia($number,$offset){
      // menampilkan seluruh data lagu berbahasa indonesia
      $this->db->from('lagu');
      $this->db->where('bahasa','Indonesia');
      $this->db->order_by("tanggal", "desc");
      $this->db->limit($number,$offset);
      $query = $this->db->get();
      return $query->result();
      }

      function tapanuli($number,$offset){
      // menampilkan seluruh data lagu berbahasa tapanuli
      $this->db->from('lagu');
      $this->db->where('bahasa','Tapanuli');
      $this->db->order_by("tanggal", "desc");
      $this->db->limit($number,$offset);
      $query = $this->db->get();
      return $query->result();
      }

      function nias($number,$offset){
      // menampilkan seluruh data lagu berbahasa nias
      $this->db->from('lagu');
      $this->db->where('bahasa','Nias');
      $this->db->order_by("tanggal", "desc");
      $this->db->limit($number,$offset);
      $query = $this->db->get();
      return $query->result();
      }

      function pakpak($number,$offset){
      // menampilkan seluruh data lagu berbahasa pakpak
      $this->db->from('lagu');
      $this->db->where('bahasa','Pakpak');
      $this->db->order_by("tanggal", "desc");
      $this->db->limit($number,$offset);
      $query = $this->db->get();
      return $query->result();
      }

      function jumlah_data(){
        return $this->db->get('lagu')->num_rows();
      }

      function lihat_lirik($id){
        return $this->db->get_where('lagu', array('id_lagu' => $id))->result();
      }

    }

    // class M_data extends CI_Model{
    //   function tampil_data(){
    //     return $this->db->get('lagu');
    //   }
    // }

?>
