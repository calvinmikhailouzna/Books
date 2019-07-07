<?php
class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		// cek keberadaan session 'username'	
		if (!isset($_SESSION['username'])){
			// jika session 'username' blm ada, maka arahkan ke kontroller 'login'
			redirect('login');
		}
	}
	public function index(){
	$this->load->model('User_model');
	$data['user'] = $this->user_model->showUser();
        	// baca data session 'fullname' untuk ditampilkan di view
        	$data['fullname'] = $_SESSION['fullname'];

        	// tampilkan view 'dashboard/index'
        	$this->load->view('dashboard/header', $data);
            $this->load->view('user/index');
            $this->load->view('dashboard/footer', $data);
        }

	public function delete($username){
		$this->user_model->delUser($username);
		// arahkan ke method 'books' di kontroller 'dashboard'
		redirect('user');
	}
	public function insert(){
		$username = $_POST ['username'];
		$password = $_POST ['password'];
		$role = $_POST ['role'];
		$fullname = $_POST ['fullname'];
		$this->load->model('user_model');
		$this->user_model->insertUser($username, $password, $fullname, $role);
		redirect('user');
	}
	public function edit(){
			
			$username = $_POST ['username'];
			$password = $_POST ['password'];
			$role = $_POST ['role'];
			$fullname = $_POST ['fullname'];
			$this->load->model('user_model');
			$this->user_model->edit($username, $password, $fullname, $role);
			redirect('user');
	}
	public function redirect_edit($username){
			$this->load->model('user_model');
			$data['users'] = $this->user_model->showUser();
			$data['fullname'] = $_SESSION['fullname'];
			$data['username'] = $username;

			$this->load->view('dashboard/header', $data);
            $this->load->view('user/edit');
            $this->load->view('dashboard/footer', $data);
        }
}
?>