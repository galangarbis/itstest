<?php 
class Pasien_model extends CI_Model {
    public function __construct()
	{
		parent::__construct();
		$this->load->database();

    }
    
    public function add($table,$data){
        $query = $this->db->insert($table,$data);
        if ($this->db->affected_rows() > 0) {
            return true;
            } else {
            return false;
            }
	}
}
?>