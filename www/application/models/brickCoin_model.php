<?php
class brickCoin_model extends CI_Model {

        public function __construct()
        {
        	parent::__construct();
            $this->load->database();
        }

        public function test(){
        	$this->db->select('*');
        	$this->db->from('test');
        	return $this->db->get()->result_array();
        }
}

?>