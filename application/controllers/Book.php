<?php

class Book extends CI_Controller {

	public function index()
	{
		$this->load->view('v_header.php');
		$this->load->view('book.php');
		$this->load->view('v_footer.php');
	}

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
}