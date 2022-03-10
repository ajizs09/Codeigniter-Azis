<?php
    class M_siswa extends CI_Model{
        function index(){
            return $this->db->get('tbl_siswa');
        }
    }
?>