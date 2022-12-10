<?php

class Book extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('modelservices');
	// }

	public function haircut()
	{
		$this->load->view('v_header.php');
		$this->load->view('v_haircut.php');
		$this->load->view('v_footer.php');
	}

	public function coloring()
	{
		$this->load->view('v_header.php');
		$this->load->view('v_coloring.php');
		$this->load->view('v_footer.php');
	}

	public function shave()
	{
		$this->load->view('v_header.php');
		$this->load->view('v_shave.php');
		$this->load->view('v_footer.php');
	}

	public function hairartist()
	{
		$this->load->view('v_header.php');
		$this->load->view('v_hairartist.php');
		$this->load->view('v_footer.php');
	}

	public function confirm()
	{
		$this->load->view('v_header.php');
		$this->load->view('v_confirm_book.php');
		$this->load->view('v_footer.php');
	}


}