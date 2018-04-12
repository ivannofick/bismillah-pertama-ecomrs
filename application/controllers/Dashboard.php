<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('dashboard_qry');
		$this->load->library('template');
	}
	public function index(){
		$this->template->utama('list');
	}
	public function login(){
		$datas = $this->dashboard_qry->login();
		if ($datas== 'adm') {
			$this->session->set_userdata('admin', $datas);
		}elseif ($datas == 'cust') {
			$this->session->set_userdata('customer', $datas);
		}
	}
	public function validasi(){
		if ($this->session->userdata('customer') == 'cust') {
			redirect('cust');
		}elseif ($this->session->userdata('admin') == 'adm') {
			redirect('adminco');
		}
	}
	public function input_barang(){
		$this->template->utama('input_barang');
	}

	public function keluar(){
        $this->session->sess_destroy();
        redirect(base_url(''));
	}

}
