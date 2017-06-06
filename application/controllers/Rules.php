<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Rules extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->helper(array('url','form'));
     }
 
     public function index() {
 
         $data['title'] = "Rules Kado";
		 $data['body'] = "rules";
		 $data['styles'] = "includes/styles_data_table";

		 $this->load->view('includes/template_site', $data);
     }
 }