<?php 
	
	class M_pelanggan extends CI_Model{

		function get_pelanggan(){

			return $this->db->get('pelanggan');

		}

		function insert_data($table, $data){
			$this->db->insert($table, $data);
		}

		function edit_data($where,$table){		
			return $this->db->get_where($table,$where);
		}

		function update_data($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

	}