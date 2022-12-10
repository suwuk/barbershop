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

    public function service()
    {
        $data['us'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
        $data['judul'] = 'Data Service';
        $data['gethaircut'] = $this->ModelService->getHaircut()->result(); 
        $data['getshave'] = $this->ModelService->getShave()->result(); 
        $data['getcoloring'] = $this->ModelService->getColoring()->result(); 
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/data_services', $data);
        $this->load->view('templates/footer');
    }

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

}