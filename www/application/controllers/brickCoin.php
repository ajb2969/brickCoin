<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class brickCoin extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header.php');
		$this->load->view('brickCoin/index.php');
		$this->load->view('includes/footer.php');
	}
}
