<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Result extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->simple_login->cek_login();
         $this->load->model('M_account');
     }
 
     //Load Halaman 
     public function index() {
         $data['dataPartner'] = $this->M_account->detailPartner($this->session->userdata('id_user'));
         
		 $data['title'] = "Pairing";
			$data['body'] = "pairing/result_body";
			$data['styles'] = "includes/styles_data_table";

			$this->load->view('includes/template_site', $data);
		 // $this->load->view('pairing/v_result',$data);
     }
 }