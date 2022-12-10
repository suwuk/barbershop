<?php

defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    public function index()
    {
        $this->load->view('v_header.php',);
		$this->load->view('book.php');
		$this->load->view('v_footer.php');
    }

}