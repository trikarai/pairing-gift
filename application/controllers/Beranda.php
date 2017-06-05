<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Beranda extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->model('M_setting'); //call model
	}
     
	public function index()
	{
		$this->data['title'] = "Hi Guys";
		$this->data['body'] = "account/beranda_body";
		
		$this->load->view('account/beranda', $this->data);
		// $this->load->view('account/beranda');
	}
      
	public function admin(){
		$this->form_validation->set_rules('status', 'STATUS','required');
		if($this->form_validation->run() == FALSE){

			$data['data'] = $this->m_setting->cekStatusSetting();
			$this->load->view('admin/v_setting',$data);
		} else {
			$data['status'] = $this->input->post('status');
			
			$this->m_setting->setData($data);
			$this->m_setting->updateSetting();
				
			 $pesan['message'] =    "Perubahan setting berhasil";
			 
			 $this->load->view('present/v_success',$pesan);   
		}
	}
      
}