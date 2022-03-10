<?php

    class User extends CI_Controller{
        function data(){
            $this->load->view('v_user');
        }   
        function pegawai(){
            $this->load->view('v_pegawai');
        }   
        function siswa(){
            $this->load->view('v_siswa');
        }   
        function transaksi(){
            $this->load->view('v_transaksi');
        }   
        function stok(){
            $this->load->view('v_stok');
        } 

        function biodata($nama,$alamat){
            $data = [
                        'nm'        => $nama,
                        'alt'       => $alamat,
                    ];
            $this->load->view('v_biodata', $data);

        }
        function tambah_data(){
            $this->load->view('form_tambah_data_v');
        } 
        function action_tambahdata(){
            $data = [
                        'nm'            => $this->input->post('namaa'),
                        'alt'           => $this->input->post('alamatt'),
                        'np'            => $this->input->post('nohpp'),
                        'em'            => $this->input->post('emaill'),
                        'skl'           => $this->input->post('sekolahh'),
                        'tempat'        => $this->input->post('tempatt'),
                        'tanggal'       => $this->input->post('tanggall'),
                        'jk'            => $this->input->post('jeniss'),
                        'hb'            => $this->input->post('hobii'),
                        'sp'            => $this->input->post('statuss'),
                        'ft'            => $this->input->post('fotoo')

                    ];

            $this->load->view('v_biodata', $data);
        } 
        function tampil_data(){
            $this->load->model('M_user');
            $data['user'] = $this->M_user->tampil_data()->result();
            $this->load->view('v_tampil_data_user', $data);
        }
        function tambahdata(){
            $this->load->view('tambah_data_user_v');
        }
        function action_tambah_data(){
            $add = [
                        'nama_depan'              => $this->input->post('nama_depan'),
                        'nama_belakang'           => $this->input->post('nama_belakang'),
                        'tempat_lahir'            => $this->input->post('tempat_lahir'),
                        'tanggal_lahir'           => $this->input->post('tanggal_lahir'),
                        'jenis_kelamin'           => $this->input->post('jenis_kelamin'),
                        'alamat'                  => $this->input->post('alamat'),
                        'jenjang_pendidikan'      => $this->input->post('jenjang_pendidikan'),
                        
                    ];

                    $this->db->insert('tbl_biodata', $add);
                    redirect('../User/tampil_data');
             }
    }

?>