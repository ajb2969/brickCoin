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

        public function getAllUsers(){
            $this->db->select('amount,walletID,username,phoneNumber');
            $this->db->from('user');
            return $this->db->get()->result_array();   
        }

        public function getTransactions(){
            $this->db->select('*');
            $this->db->from('transaction');
            return $this->db->get()->result_array();   
        }

        public function sendTransaction($data){
            //get money from sender
            $this->db->select('amount');
            $this->db->from('user');
            $this->db->where('walletID', $data['from']);
            $senderOld = $this->db->get()->result_array();
            $senderOld = $senderOld[0]['amount'];
            //remove money from sender
            $senderNew =  $senderOld - $data['amount'];
            //update sender.
            $this->db->where('walletID', $data['from']);
            $this->db->update('user', array('amount' => $senderNew));

            //get money from reciever
            $this->db->select('amount');
            $this->db->from('user');
            $this->db->where('walletID', $data['to']);
            $recieverOld = $this->db->get()->result_array();
            $recieverOld = $recieverOld[0]['amount'];
            //add money to reciever
            $recieverNew =  $recieverOld + $data['amount'];
            //update receiver.
            $this->db->where('walletID', $data['to']);
            $this->db->update('user', array('amount' => $recieverNew));

            //insert into transaction
            $date = new DateTime();
            $insert = array(
                'transactionTime' => $date->format('Y-m-d H:i:s'),
                'senderID' => $data['from'],
                'receiverID' => $data['to'],
                'amount' => $data['amount'],
                'comment' => ""
            );
            $this->db->insert('transaction',$insert);
            return "done";
        }


}

?>