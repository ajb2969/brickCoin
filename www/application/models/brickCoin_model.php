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

        public function login($data){
            $this->db->select('walletID');
            $this->db->from('user');
            $this->db->where('username',$data['username']);
            $this->db->where('password',$data['pass']);
            $result = $this->db->get()->result_array();
            return $result;
        }

        public function getUserData($wallet){
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('walletID',$wallet);
            return $this->db->get()->result_array();
        }

        public function getTransactions(){
            $this->db->select('*');
            $this->db->from('transaction');
            return $this->db->get()->result_array();   
        }

}

?>