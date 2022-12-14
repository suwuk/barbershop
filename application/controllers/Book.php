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

    public function user_book(){
        $email = $this->session->userdata('email');
        $book = $this->ModelBook->getBookByUser(['email' => $email])->result();
        try {
            if(!$book){
                throw new Exception("Data tidak ditemukan", 500);               
            }
            $data['book'] = $book;
            $this->load->view('v_header.php',);
            $this->load->view('v_user_book.php', $data);
            $this->load->view('v_footer.php');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function delete_book($id)
    {
        $where = array('id_booking' => $id);
        $this->ModelBook->delete_data($where,'data_booking');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('book/user_book');        
    }

    public function detail_book($id){
        try {
            if(!$id){
                throw new Exception("Data tidak ditemukan", 500);
            }
            $book = $this->ModelBook->getBookByUser(['id_booking' => $id])->row();
            $data['book'] = $book;
            $this->load->view('v_header.php',);
            $this->load->view('v_user_book_detail.php', $data);
            $this->load->view('v_footer.php');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

	public function haircut()
	{
        $haircut = $this->ModelService->getHaircut()->result();
        $data['haircut'] = $haircut;
		$this->load->view('v_header.php');
		$this->load->view('v_haircut.php',$data);
		$this->load->view('v_footer.php');
	}
    
	public function coloring()
	{
        $coloring = $this->ModelService->getColoring()->result();
        $data['coloring'] = $coloring;
		$this->load->view('v_header.php');
		$this->load->view('v_coloring.php',$data);
		$this->load->view('v_footer.php');
	}
    
	public function shave()
	{
        $shave = $this->ModelService->getShave()->result();
        $data['shave'] = $shave;
		$this->load->view('v_header.php');
		$this->load->view('v_shave.php',$data);
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
                redirect('book');        
        
    }

}