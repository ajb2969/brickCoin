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

	public function team(){
		return $this->load->view('brickCoin/team.php');
	}

	public function faq(){
		return $this->load->view('brickCoin/faq.php');
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

	public function walletCreator(){
		//create unique 45 character hash
		$charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
		$charLength = strlen($charset);
		$randomString = "";
		for ($i=0; $i < 42; $i++) { 
			$randomString .= $charset[rand(0,$charLength-1)];
		}
		return $randomString;
	}

	public function loginCreate(){
		$post = $this->input->post();
		$post['walletID'] = $this->walletCreator();
		$create = $this->brickCoin_model->createAcc($post);
		//account is created.
		echo base64_encode($post['walletID']);
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

	public function addView(){
		$post = $this->input->post();
		$wallet = base64_decode($post['id']);
		$data['curr'] = $this->brickCoin_model->getUserData($wallet);
		$view = $this->load->view('brickCoin/addView.php',$data);
		return $view;
	}

	public function reloadDashboard($wallet){
		$userData['user'] = $this->brickCoin_model->getUserData($wallet);
		$this->load->view('brickCoin/dashboardViewOnly.php',$userData);
	}

	public function sendTransaction(){
		$post = $this->input->post();
		$view['date'] = $this->brickCoin_model->sendTransaction($post);
		//transaction completed. send back to og view.
		$view['info'] = $this->brickCoin_model->getUserData($post['from']);
		$view['view'] = $this->reloadDashboard($post['from']);
		return $view;
	}

	public function addFunds(){
		$post = $this->input->post();
		$this->brickCoin_model->addFunds($post);
		return $this->reloadDashboard($post['wallet']);
	}
}
