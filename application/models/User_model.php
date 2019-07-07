<?php

class User_model extends CI_Model {

	// method untuk menampilkan data buku
	public function showUser(){
		
		
		$query = $this->db->get('users');
		return $query->result_array();
		
	}
	// method untuk hapus data buku berdasarkan id
	public function delUser($username){
		$this->db->delete('users', array("username" => $username));
	}

	// method untuk mencari data buku berdasarkan key
	public function findUser($key){

		$query = $this->db->query("SELECT * FROM user WHERE username LIKE '%$key%' 
									OR fullname LIKE '%$key%' 
									OR role LIKE '%$key%'");
		return $query->result_array();
	}
	public function edit($username,$password,$fullname,$role){
			
			$this->db->set('username', $username);
			$this->db->set('password', $password);
			$this->db->set('fullname', $fullname);
			$this->db->set('role', $role);
			$this->db->where('username', $username);
			$this->db->update('users');
			redirect('user');
	}
	public function insertUser($username, $password, $fullname, $role){
		$data = array(
					"username" => $username,
					"password" => $password,
					"fullname" => $fullname,
					"role" => $role);
		$query = $this->db->insert('users', $data);
	}
	public function getUserProfile($username){
		$query = $this->db->get_where('users', array('username' => $username));
		return $query->row_array();
	}
}

?>