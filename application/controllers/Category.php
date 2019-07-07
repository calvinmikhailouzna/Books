<?php
class Category extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		// cek keberadaan session 'username'	
		if (!isset($_SESSION['username'])){
			// jika session 'username' blm ada, maka arahkan ke kontroller 'login'
			redirect('login');
		}
	}
	public function index(){
			$this->load->model('category_model');
			$data['kategori'] = $this->category_model->showCat();

        	$data['fullname'] = $_SESSION['fullname'];

        	$this->load->view('dashboard/header', $data);
            $this->load->view('category/index');
            $this->load->view('dashboard/footer', $data);
        }

	public function delete($idkategori){
		$this->load->model('category_model');
		$this->category_model->delCat($idkategori);
		redirect('Category');
	}
	public function insert(){
		$kategori = $_POST ['kategoriBaru'];
		$this->load->model('category_model');
		$this->category_model->insertCat($kategori);
		redirect('Category');
	}

	public function edit(){
		$kategoriBaru = $_POST ['kategoriBaru'];
		$idkategori = $_POST ['idkategori2'];
		$this->load->model('category_model');
		$this->category_model->edit($idkategori, $kategoriBaru);	
	}
	public function redirect_edit($idkategori){
			$this->load->model('category_model');
			$data['kategori'] = $this->category_model->showCat();
			$data['fullname'] = $_SESSION['fullname'];
			$data['idkategori'] = $idkategori;

			$this->load->view('dashboard/header', $data);
            $this->load->view('category/edit');
            $this->load->view('dashboard/footer', $data);
        }

}
?>