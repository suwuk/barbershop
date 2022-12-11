<?php

class Book extends CI_Controller {

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
        $data['us'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
		$this->load->view('v_header.php');
		$this->load->view('v_confirm_book.php',$data);
		$this->load->view('v_footer.php');
	}

	public function tambah_book(){
        $this->_rules_service();
        if($this->form_validation->run() == false){
            $this->confirm();
        }else{        
                $data = array(
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'phone' => $this->input->post('phone'),
                    'service' => $this->input->post('service'),
                    'type' => $this->input->post('type'),
                    'hair_artist' => $this->input->post('hair_artist'),
                    'price' => $this->input->post('price'),
                    'date' => $this->input->post('date'),
                );
                $this->ModelBook->insert_data($data,'data_booking');
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Berhasil ditambahkan
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('book/index');        
        }
    }

	public function _rules_service(){
        $this->form_validation->set_rules('name', 'Name', 'required', array(
            'required' => 'isi %s!!'
        ));
        $this->form_validation->set_rules('email', 'email', 'required', array(
            'required' => 'isi %s!!'
        ));
        $this->form_validation->set_rules('phone', 'phone', 'required', array(
            'required' => 'isi %s!!'
        ));
        $this->form_validation->set_rules('service', 'Service', 'required', array(
            'required' => 'isi %s!!'
        ));
        $this->form_validation->set_rules('type', 'Type', 'required', array(
            'required' => 'isi %s!!'
        ));
        $this->form_validation->set_rules('price', 'Price', 'required', array(
            'required' => 'isi %s!!'
        ));
    }


}