<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarif extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_tarif');
	}

	public function index()
	{
		$data['page_title'] = 'Tarif';

		$data['index'] = 'Halaman Tarif';

		$data['web_name'] = ' | Admin Pembayaran PLN';

		$this->load->view('admin/tarif/index', $data);
	}
}
