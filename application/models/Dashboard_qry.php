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
            $username = $this->input->post('username');
            $password = $this->input->post('password');
    	$query = $this->db->query("select username, sandi_kata, level from user_datas where username = {$this-> db ->escape($username)} and sandi_kata = {$this-> db ->escape($password)} ");
    	$resl = $query->result_array();
        foreach ($resl as $rows) {
            if (!empty($rows)) {
                if ($rows['level'] == 'adm') {
                    return $rows['level'];
                }elseif ($rows['level'] == 'cust') {
                    return $rows['level'];
                }
            }
        }
    }
}