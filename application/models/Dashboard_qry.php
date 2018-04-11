<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Dashboard_qry extends CI_Model
{
    public function __construct(){
        parent:: __construct();
        $this->load->library('session');
    }
    public function index(){
        $data = $this->db->query("select * from barang");
        return $data->result_array();
    }
    public function login(){
    	$newdata = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
            );
    	$query = $this->db->query("select * from user_datas where username = {$this->db->escape($newdata['username'])} and sandi_kata = {$this->db->escape($newdata['password'])} ");
    	$resl = $query->result_array();
        if ($resl) {
            return $this->session->set_flashdata('berhasil_sekali', 'berhasil');
        }else{
            return $this->session->set_flashdata('pengguna_takada', 'pengguna_takadas');
        }
    }
}