<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Present extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('m_account'); //call model
     }
 
     public function index() {
 
         $this->form_validation->set_rules('clue1', '','');
         $this->form_validation->set_rules('clue2','','');
         $this->form_validation->set_rules('clue3','','');
         $this->form_validation->set_rules('accept','Term & Condition','required');
         	 
        if($this->form_validation->run() == FALSE) {
			$data['dataPresent'] = $this->m_account->detailPresent($this->session->userdata('id_user'));

			$data['title'] = "Present";
			$data['body'] = "present/present_body";
			$data['styles'] = "includes/styles_data_table";

			$this->load->view('includes/template_site', $data);
            // $this->load->view('present/v_present',$data);
        }else{
			$data['id_user'] = $this->input->post('id_user');
			$data['clue1'] = $this->input->post('clue1');
			$data['clue2'] = $this->input->post('clue2');
			$data['clue3'] = $this->input->post('clue3');
        
        $this->m_account->setPresent($data);
        $this->m_account->updatePresent($this->input->post('id_user'));
             
             $data['message'] =    "Pengisian Hadiah berhasil";
             
             $data['title'] = "Present";
		     $data['body'] = "present/present_body";
		     $data['styles'] = "includes/styles_data_table";

			 $this->load->view('includes/template_site', $data);
         }
     }
 }