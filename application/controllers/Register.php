<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('M_account'); //call model
     }
 
     public function index() {
 
         $this->form_validation->set_rules('name', 'NAME','required');
         $this->form_validation->set_rules('email','EMAIL','required|valid_email');
         $this->form_validation->set_rules('password','PASSWORD','required');
         $this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
         if($this->form_validation->run() == FALSE) {
			$this->data['title'] = "Login";
			$this->data['body'] = "account/register_body";
			
			$this->load->view('account/v_login', $this->data);
			 
			 
             // $this->load->view('account/v_register');
         }else{
 
             $data['name']   =    $this->input->post('name');
             $data['email']  =    $this->input->post('email');
             $data['password'] =    md5($this->input->post('password'));
 
			//set id column value as UUID
			$this->db->set('id_user', 'UUID()', FALSE);	
             $this->M_account->daftar($data);
             
             $data['message'] =    "Pendaftaran berhasil";
             $data['title'] = "Register";
		     $data['body'] = "account/v_success";
		     $data['styles'] = "includes/styles_data_table";

			 $this->load->view('includes/template_site', $data);
			 
             // $this->load->view('account/v_success',$pesan);
         }
     }
 }