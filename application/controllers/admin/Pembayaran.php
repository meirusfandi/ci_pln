<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_pembayaran');
	}

	public function index()
	{
		$data['page_title'] = 'Pembayaran';

		$data['index'] = 'Halaman Pembayaran';

		$data['web_name'] = ' | Admin Pembayaran PLN';

		$this->load->view('admin/pembayaran/index', $data);
	}
}
