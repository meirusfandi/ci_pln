<?php 
	
	class M_tarif extends CI_Model{

		function get_tarif(){

			return $this->db->get('tarif');

		}

	}