<?php 
	
	class M_tagihan extends CI_Model{

		function get_tagihan(){

			return $this->db->get('tagihan');

		}

	}