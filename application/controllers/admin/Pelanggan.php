<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_pelanggan');
	}

	public function index() {
		$data['page_title'] = 'Pelanggan';

		$data['index'] = 'Halaman Pelanggan';

		$data['web_name'] = ' | Admin Pembayaran PLN';

		$data['pelanggan'] = $this->M_pelanggan->get_pelanggan()->result();

		$this->load->view('admin/pelanggan/index', $data);
	}

	public function add(){
		$data['page_title'] = 'Tambah Pelanggan';

		$data['index'] = 'Halaman Tambah Pelanggan';

		$data['web_name'] = ' | Admin Pembayaran PLN';

		$this->load->view('admin/pelanggan/tambah', $data);
	}

	public function tambah_aksi(){

		$name = $this->input->post('name');

		$alamat = $this->input->post('alamat');

		$kode = $this->input->post('kode');

		$data = array(
			'nama' => $name, 
			'alamat' => $alamat,
			'kodeTarif' => $kode
		);

		$this->M_pelanggan->insert_data('pelanggan', $data);

		redirect('admin/pelanggan');
	}

	public function edit($id){
		$where = array('ID' => $id);
		$data['page_title'] = 'Edit Pelanggan';

		$data['index'] = 'Halaman Edit Pelanggan';

		$data['web_name'] = ' | Admin Pembayaran PLN';

		$data['pelanggan'] = $this->M_pelanggan->edit_data($where,'pelanggan')->result();

		$this->load->view('admin/pelanggan/edit',$data);
	}

	public function edit_aksi(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$kode = $this->input->post('kode');
	 
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'kodeTarif' => $kode
		);
	 
		$where = array(
			'ID' => $id
		);
	 
		$this->M_pelanggan->update_data($where,$data,'pelanggan');
		redirect('admin/pelanggan');
	}

}
