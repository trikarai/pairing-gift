<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Pairing extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('m_account'); //call model
     }
 
     public function index(){
        $this->form_validation->set_rules('id_user','id','required');
            if($this->form_validation->run() == FALSE) {    
            $this->load->view('pairing/v_pairing');
        }else{
            
            $id_partner = $this->m_account->getRandomPartner($this->input->post('id_user'));
            
            $data['id_user'] = $this->input->post('id_user');
            $data['id_partner'] = $id_partner;
            
            $this->m_account->setPairing($data);
            
            $this->m_account->updatePairing($this->input->post('id_user'),$id_partner);             
            $pesan['message'] =    "Pairing berhasil";
            $this->load->view('pairing/v_success',$pesan);
         }
     }
 }