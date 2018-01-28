<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class brickCoin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('brickCoin_model');
	}


	public function index()
	{
		$this->load->view('includes/header.php');
		$this->load->view('brickCoin/index.php');
		$this->load->view('includes/footer.php');
	}

	public function login(){
		//create login view.
		$this->load->view('includes/header.php');
		$this->load->view('brickCoin/login.php');
		$this->load->view('includes/footer.php');
	}

	public function loginCheck(){
		$post = $this->input->post();
		$check = $this->brickCoin_model->login($post);
		if (isset($check[0]['walletID'])) {
			echo base64_encode($check[0]['walletID']);
		}
		else{
			echo "1";
		}
	}

	public function loadDashboard(){
		//decrypt id
		$get = $this->input->get();
		$new = base64_decode($get['id']);
		$userData['user'] = $this->brickCoin_model->getUserData($new);
		// $userData['transactions'] = $this->brickCoin_model->getTransactions();
		$this->load->view('includes/header.php');
		$this->load->view('brickCoin/dashboard.php',$userData);
		$this->load->view('includes/footer.php');
	}


	public function tradeView(){
		$post = $this->input->post();
		$wallet = base64_decode($post['id']);
		$data['users'] = $this->brickCoin_model->getAllUsers();
		$data['curr'] = $this->brickCoin_model->getUserData($wallet);
		$view = $this->load->view('brickCoin/tradeView.php',$data);
		return $view;

		//get alll from the user table
	}

	public function sendTransaction(){
		$post = $this->input->post();
		echo $this->brickCoin_model->sendTransaction($post);
	}
}
