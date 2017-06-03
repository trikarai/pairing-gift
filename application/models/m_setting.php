 <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_setting extends CI_Model{

  var $table = "setting";
  var $key = "id";
  
  function __construct(){
	  parent::__construct();
  }
    
  function cekStatusSetting(){
      $query = $this->db->query("SELECT status FROM $this->table WHERE id = 1");
      return $query->result_array();
  }
  function setData($data){
      $this->status = $data['status'];
  }
  function updateSetting(){
      $data = array(
          'status'=> $this->status
        );
            
      $this->db->where($this->key,1);
      $this->db->update($this->table,$data);     
  }  
}