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
			echo $check[0]['walletID'];
		}
		else{
			echo "1";
		}
	}

	public function loadDashboard(){
		//decrypt id
		$get = $this->input->get();
		$new = $get['id'];
		$userData['user'] = $this->brickCoin_model->getUserData($new);
		$this->load->view('includes/header.php');
		$this->load->view('brickCoin/dashboard.php',$userData);
		$this->load->view('includes/footer.php');
	}
}
