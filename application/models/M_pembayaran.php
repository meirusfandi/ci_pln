<?php 
	
	class M_pembayaran extends CI_Model{

		function get_pembayaran(){

			return $this->db->get('pembayaran');

		}

	}