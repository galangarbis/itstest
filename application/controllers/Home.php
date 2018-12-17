<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pasien_model');
    }

    public function index(){
        $data = null;
        // $this->load->view('layout/wrapper', $data);
        $this->rawat_lib->load_view('index', $data);
    }

    public function rawat_jalan(){
        $data = null;
        $this->rawat_lib->load_view('rawat_jalan', $data);
    }

    public function add_pasien(){
        // $data['data'] = array(
        //     'identitas' => $this->input->post('identitas'),
        //     'jk' => $this->input->post('jk'),
        //     'ttl' => $this->input->post('ttl')
        //   );

        $post = $this->input->post();
            // $dataInsert = array(
            //     // 'user' => $this->session->userdata('uid'),
            //     'pasien_identitas' => $post['identitas'], 
            //     'pasien_nama' => $post['nama'],
            //     'pasien_jenis_kelamin' => $post['jk'],
            //     'pasien_golongan_darah' => $post['goldarah'],
            //     'pasien_tempat_lahir' => $post['tmptlahir'],
            //     'pasien_tanggal_lahir' => $post['ttl'],
            //     'pasien_no_hp' => $post['nohp'],
            //     'pasien_alamat' => $post['alamat'],
            //     'pasien_jenis' => $post['jenis']
            // );

            // $return = $this->Pasien_model->add('pasien',$dataInsert);
            // $hasil2 = array('result' => true);
            // if ($return == true) {
            //     $data['result_msg'] = 'Json data successfully inserted into database !';
            //     } else {
            //     $data['result_msg'] = 'Please configure your database correctly';
            //     }
            $data['result_msg'] = 'true';
            echo json_encode($data); 

    }
}