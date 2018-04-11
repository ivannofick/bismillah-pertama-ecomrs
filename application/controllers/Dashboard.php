<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('dashboard_qry');
		$this->load->library('template');
	}
	public function index(){
		$this->template->utama('indexcp');
	}
	public function login(){
		$this->data['logins'] = $this->dashboard_qry->login();
		if ($this->session->flashdata('berhasil_sekali') == 'berhasil') {
			echo "selamat";
		 }elseif ($this->session->flashdata('pengguna_takada') == 'pengguna_takadas') {
		 	echo "pengguna_takterdaftar";
		 }
	}


}
