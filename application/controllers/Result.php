<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Result extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->simple_login->cek_login();
         $this->load->model('m_account');
     }
 
     //Load Halaman 
     public function index() {
         $data['dataPartner'] = $this->m_account->detailPartner($this->session->userdata('id_user'));
         $this->load->view('pairing/v_result',$data);
     }
 }