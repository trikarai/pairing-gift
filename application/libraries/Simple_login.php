<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 /*
  * Simple_login Class
  * Class ini digunakan untuk fitur login, proteksi halaman dan logout
  * @author  Gun Gun Priatna
  * @url    https://recodeku.blogspot.com
  */
 
 class Simple_login {
 
     // SET SUPER GLOBAL
     var $CI = NULL;
 
     /**
      * Class constructor
      *
      * @return   void
      */
     public function __construct() {
         $this->CI =& get_instance();
     }
 
     /*
     * cek email dan password pada table users, jika ada set session berdasar data user dari
     * table users.
     * @param string email dari input form
     * @param string password dari input form
     */
     public function login($email, $password) {
         
         //cek email dan password
         $query = $this->CI->db->get_where('user',array('email'=>$email,'password' => md5($password)));
 
         if($query->num_rows() == 1) {
             //ambil data user berdasar email
             $row  = $this->CI->db->query('SELECT id_user,name FROM user where email = "'.$email.'"');
             $admin     = $row->row();
             $id   = $admin->id_user;
             $name = $admin->name;
 
             //set session user
             $this->CI->session->set_userdata('name', $name);
             $this->CI->session->set_userdata('email', $email);
             $this->CI->session->set_userdata('id_login', uniqid(rand()));
             $this->CI->session->set_userdata('id_user', $id);
 
             //redirect ke halaman dashboard
             redirect(site_url('dashboard'));
         }else{
 
             //jika tidak ada, set notifikasi dalam flashdata.
             $this->CI->session->set_flashdata('sukses','email atau password anda salah, silakan coba lagi.. ');
 
             //redirect ke halaman login
             redirect(site_url('login'));
         }
          return false;
      }
     
     /**
      * Cek session login, jika tidak ada, set notifikasi dalam flashdata, lalu dialihkan ke halaman
      * login
      */
     public function cek_login() {
 
         //cek session email
         if($this->CI->session->userdata('email') == '') {
 
             //set notifikasi
             $this->CI->session->set_flashdata('sukses','Anda belum login');
 
             //alihkan ke halaman login
             redirect(site_url('login'));
         }
     }
 
     /**
      * Hapus session, lalu set notifikasi kemudian di alihkan
      * ke halaman login
      */
     public function logout() {
         $this->CI->session->unset_userdata('name');
         $this->CI->session->unset_userdata('email');
         $this->CI->session->unset_userdata('id_login');
         $this->CI->session->unset_userdata('id_user');
         $this->CI->session->set_flashdata('sukses','Anda berhasil logout');
         redirect(site_url('login'));
     }
 }