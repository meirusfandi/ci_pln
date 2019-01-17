<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_user');
	}

	public function index()
	{
		$data['page_title'] = 'User';

		$data['index'] = 'Halaman User';

		$data['web_name'] = ' | Admin Pembayaran PLN';

		$this->load->view('admin/user/index', $data);
	}
}
