<?php
class Category_model extends CI_Model {

	// method untuk menampilkan data buku
	public function showCat(){
		
		
		$query = $this->db->get('kategori');
		return $query->result_array();
		
	}
	// method untuk hapus data buku berdasarkan id
	public function delCat($idkategori){
		$this->db->delete('kategori', array("idkategori" => $idkategori));
	}

	// method untuk mencari data buku berdasarkan key
	public function findCat($key){

		$query = $this->db->query("SELECT * FROM kategori WHERE idkategori LIKE '%$key%' 
									OR kategori LIKE '%$key%'");
		return $query->result_array();
	}
	public function edit($idkategori,$kategori){
			
			$this->db->set('kategori', $kategori);
			$this->db->where('idkategori', $idkategori);
			$this->db->update('kategori');
			redirect('category');
	}
	public function insertCat($kategori){
		$data = array(
					"kategori" => $kategori
		);
		$query = $this->db->insert('kategori', $data);
	}
	public function getUserProfile($username){
		$query = $this->db->get_where('users', array('username' => $username));
		return $query->row_array();
	}
}

?>