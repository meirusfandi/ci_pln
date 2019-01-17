<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tagihan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_tagihan');
	}

	public function index()
	{
		$data['page_title'] = 'Tagihan';

		$data['index'] = 'Halaman Tagihan';

		$data['web_name'] = ' | Admin Pembayaran PLN';

		$this->load->view('admin/tagihan/index', $data);
	}
}
