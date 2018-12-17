<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rawat_lib
{
    protected $ci;

    public function __construct()
	{
		# code...
		$this->ci =& get_instance();
        $this->ci->load->database();
        $this->ci->db->query("SET time_zone = '+07:00';");
        $this->ci->db->query("SET lc_time_names = 'id_ID';");
        $this->initiate_cache();
        $this->ci->load->library('session');
    }
    
    public function initiate_cache()
    {
        $this->ci->load->driver('cache', array('adapter' => 'memcached', 'backup' => 'file'));
    }

    public function load_view($view_file, $data)
    {
        $this->ci->load->view('layout/header');

        if ($data) {
            $this->ci->load->view($view_file, $data);
        } else {
            $this->ci->load->view($view_file);
        }

        $this->ci->load->view('layout/footer');
    }
}