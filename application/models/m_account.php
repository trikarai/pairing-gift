 <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_account extends CI_Model{

  var $table = "user";
  var $key = "id_user";
  
  function __construct(){
	  parent::__construct();
  }
  
  function daftar($data){
	  $this->db->insert('user',$data);
  }
  function cekStatusPairing($id){
      $query = $this->db->query("SELECT transmiting FROM user WHERE id_user = '$id'");
      return $query->result_array();
  }
  function detailPresent($id){
      $data = array('id_user'=>$id);
      $query = $this->db->get_where($this->table,$data);
      return $query->result_array();
  }
  function detailPartner($id){
      $query1 = $this->db->query("SELECT partner_id FROM user WHERE id_user = '$id'");
      $row = $query1->row(); 
      $id_partner = $row->partner_id;
      
      $data = array('id_user'=>$id_partner);
      $query = $this->db->get_where($this->table,$data);
      return $query->result_array();   
  }
  
    function setPresent($data){
	  $this->id_user = $data['id_user'];
	  $this->clue1 = $data['clue1'];
  	  $this->clue2 = $data['clue2'];
  	  $this->clue3 = $data['clue3'];
          $this->code = $data['code'];
  }

  function updatePresent($id){
	  $data = array(
			'clue1' => $this->clue1,
			'clue2' => $this->clue2,
			'clue3' => $this->clue3,
                        'code' => $this->code
	  );
	$this->db->where($this->key,$id);
	$this->db->update($this->table,$data);
  }
	   
  
  function  getRandomPartner($id){
      $query = $this->db->query("SELECT id_user FROM user WHERE receiving = 0 AND id_user != '$id' ORDER BY RAND() LIMIT 1");
      $row = $query->row(); 
      return $row->id_user;
  }
  
  function setPairing($data){
      $this->id_user = $data['id_user'];
      $this->id_partner = $data['id_partner'];
  }
  function updatePairing($id_user,$id_partner){
      $dataT = array(
          'id_user'=>$this->id_user,
          'transmiting'=>1,
          'partner_id'=> $this->id_partner
          );
      $dataR = array(
          'id_user'=>$this->id_partner,
          'receiving'=>1,
          );
      
      $this->db->where($this->key,$id_user);
      $this->db->update($this->table,$dataT);
      
      $this->db->where($this->key,$id_partner);
      $this->db->update($this->table,$dataR);
      
  }
	   
  }