<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Dashboard extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->simple_login->cek_login();
         $this->load->model('m_account');
         $this->load->model('m_setting');
     }
 
     //Load Halaman dashboard
     public function index() {
         $data['data'] = $this->m_account->cekStatusPairing($this->session->userdata('id_user'));
         $data['title'] = "Dashboard";
         $data['body'] = "account/dashboard_body";
         $data['styles'] = "includes/styles_data_table";
		 
		 $this->load->view('includes/template_site', $data);
		 // $this->load->view('account/v_dashboard',$data);
     }
 }