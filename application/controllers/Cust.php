<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cust extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('dashboard_qry');
		$this->load->library('template');
	}
	public function index(){
		if ($this->session->userdata('customer') == 'cust') {			
			$this->template->utama('admin');
		}else{
			if ($this->session->userdata('admin') == 'adm') {			
				$this->template->utama('admin');
			}else{				
				redirect(base_url(''));
			}
		}
	}

}
