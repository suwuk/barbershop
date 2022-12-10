<?php 
defined('BASEPATH') or exit('No direct script access allowed'); 
class Admin extends CI_Controller 
{ 
    public function __construct() 
    { 
        parent::__construct(); 
        cek_login(); 
    } 

    public function index()
    { 
        $data['judul'] = 'Dashboard'; 
        $data['us'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
        $data['anggota'] = $this->ModelUser->getUserLimit()->result_array(); 
        $data['ha'] = $this->ModelHairArtist->getHairArtist()->result_array(); 
        
        $this->load->view('templates/header', $data); 
        $this->load->view('templates/sidebar', $data); 
        $this->load->view('templates/topbar', $data); 
        $this->load->view('admin/index', $data); 
        $this->load->view('templates/footer'); 
    } 
    
    public function member()
    {
        $data['us'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
        $data['judul'] = 'Data User';
        $data['user'] = $this->ModelAdmin->getUserWhere(['role_id' => 2])->result();
        // $data['user'] = $this->ModelAdmin->get_data('user')->result();
        // $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        // $this->db->where('role_id', 2);
        // $data['anggota'] = $this->db->get('user')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/data_user', $data);
        $this->load->view('templates/footer');
    }

 
    //Service
    public function haircut()
    {
        $data['us'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
        $data['judul'] = 'Data Haircut';
        $data['gethaircut'] = $this->ModelService->getHaircut()->result(); 
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/data_haircut', $data);
        $this->load->view('templates/footer');
    }
    public function shave()
    {
        $data['us'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
        $data['judul'] = 'Data Shave';
        $data['getshave'] = $this->ModelService->getShave()->result(); 
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/data_shave', $data);
        $this->load->view('templates/footer');
    }
    public function coloring()
    {
        $data['us'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
        $data['judul'] = 'Data Coloring';
        $data['getcoloring'] = $this->ModelService->getColoring()->result(); 
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/data_coloring', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_service_haircut(){
        $data['us'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
        $data['judul'] = 'Data Service';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/tambah/data_tambah_haircut', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_service_shave(){
        $data['us'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
        $data['judul'] = 'Data Service';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/tambah/data_tambah_shave', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_service_coloring(){
        $data['us'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
        $data['judul'] = 'Data Service';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/tambah/data_tambah_coloring', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi_haircut(){
        $this->_rules_service();
        if($this->form_validation->run() == false){
            $this->tambah_service_haircut();
        }else{        
                $data = array(
                    'style' => $this->input->post('style'),
                    'harga' => $this->input->post('harga')
                );
                $this->ModelService->insert_data($data,'haircut');
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Berhasil ditambahkan
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('admin/haircut');        
        }
    }

    public function tambah_aksi_shave(){
        $this->_rules_service();
        if($this->form_validation->run() == false){
            $this->tambah_service_shave();
        }else{
                $data = array(
                    'style' => $this->input->post('style'),
                    'harga' => $this->input->post('harga')
                );
                $this->ModelService->insert_data($data,'shave');
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Berhasil ditambahkan
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('admin/shave');
        }
    }

    public function tambah_aksi_coloring(){
        $this->_rules_service();
        if($this->form_validation->run() == false){
            $this->tambah_service_coloring();
        }else{
                $data = array(
                    'style' => $this->input->post('style'),
                    'harga' => $this->input->post('harga')
                );
                $this->ModelService->insert_data($data,'coloring');
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Berhasil ditambahkan
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('admin/coloring');        
        }
    }

    public function _rules_service(){
        $this->form_validation->set_rules('style', 'Style', 'required', array(
            'required' => 'isi %s!!'
        ));
        $this->form_validation->set_rules('harga', 'Harga', 'required', array(
            'required' => 'isi %s!!'
        ));
    }

    //Produk
    public function produk()
    {
        $data['us'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
        $data['judul'] = 'Data Produk';
        $data['getproduk'] = $this->ModelProduk->getProduk()->result(); 
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/data_produk', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_produk(){
        $data['us'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
        $data['judul'] = 'Data Produk';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/tambah/data_tambah_produk', $data);
        $this->load->view('templates/footer');

    }

    public function tambah_aksi_produk(){
        $this->_rules_produk();

        if($this->form_validation->run() == false){
            $this->tambah_produk();
        }else{
            $data = array(
                'nama_produk' => $this->input->post('nama_produk'),
                'harga' => $this->input->post('harga'),
                'stok' => $this->input->post('stok')
            );
            $this->ModelProduk->insert_data($data,'produk');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil ditambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/produk');
        }
    }

    public function _rules_produk(){
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required', array(
            'required' => '%s harus diisi!!'
        ));
        $this->form_validation->set_rules('harga', 'Harga', 'required', array(
            'required' => 'isi %s!!'
        ));
        $this->form_validation->set_rules('stok', 'Stok', 'required', array(
            'required' => 'isi %s!!'
        ));
    }

    //Hairartist
    public function hairartist()
    {
        $data['us'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
        $data['judul'] = 'Data Hair Artist';
        $data['hairartist'] = $this->ModelHairArtist->getHairArtist()->result(); 
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/data_hair_artist', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_hairartist(){
        $data['us'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
        $data['judul'] = 'Data Hair Artist';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/tambah/data_tambah_hairartist', $data);
        $this->load->view('templates/footer');

    }

    public function tambah_aksi_hairartist(){
        $this->_rules_hairartist();

        if($this->form_validation->run() == false){
            $this->tambah_hairartist();
        }else{
            $data = array(
                'nama' => $this->input->post('nama'),
                'umur' => $this->input->post('umur'),
                'no_telp' => $this->input->post('no_telp')
            );
            $this->ModelHairArtist->insert_data($data,'hair_artist');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil ditambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/hairartist');
        }
    }

    public function _rules_hairartist(){
        $this->form_validation->set_rules('nama', 'Nama', 'required', array(
            'required' => '%s harus diisi!!'
        ));
        $this->form_validation->set_rules('umur', 'Umur', 'required', array(
            'required' => 'isi %s!!'
        ));
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required', array(
            'required' => 'isi %s!!'
        ));
    }

}