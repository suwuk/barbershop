<?php

class Book extends CI_Controller {

	public function index()
	{
		$this->load->view('v_header.php');
		$this->load->view('book.php');
		$this->load->view('v_footer.php');
	}
}