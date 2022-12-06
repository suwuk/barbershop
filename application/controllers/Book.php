<?php

class Book extends CI_Controller {

	public function index()
	{
		$this->load->view('book.php');
	}
}