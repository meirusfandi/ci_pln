<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_pelanggan');
		$this->load->model('M_pembayaran');
		$this->load->model('M_tagihan');
		$this->load->model('M_tarif');
	}

	public function index()
	{
		$data['page_title'] = 'Dashboard';

		$data['index'] = 'Halaman Dashboard';

		$data['web_name'] = ' | Admin Pembayaran PLN';

		$this->load->view('admin/dashboard/index', $data);
	}
}
