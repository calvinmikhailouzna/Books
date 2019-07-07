<?php
class Book extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		// cek keberadaan session 'username'	
		if (!isset($_SESSION['username'])){
			// jika session 'username' blm ada, maka arahkan ke kontroller 'login'
			redirect('login');
		}
	}


	// method hapus data buku berdasarkan id
	public function delete($id){
		$this->book_model->delBook($id);
		// arahkan ke method 'books' di kontroller 'dashboard'
		redirect('dashboard/books');
	}

	// method untuk tambah data buku
	public function insert(){

		// target direktori fileupload
		$target_dir = "c:/xampp/htdocs/books/assets/images/";
		
		// baca nama file upload
		$filename = str_replace('-', '_', $_FILES["imgcover"]["name"]);

		// menggabungkan target dir dengan nama file
		$target_file = $target_dir . basename($filename);

		// proses upload
		move_uploaded_file($_FILES["imgcover"]["tmp_name"], $target_file);

		// baca data dari form insert buku
		$judul = $_POST['judul'];
		$pengarang = $_POST['pengarang'];
		$penerbit = $_POST['penerbit'];
		$sinopsis = $_POST['sinopsis'];
		$thnterbit = $_POST['thnterbit'];
		$idkategori = $_POST['idkategori'];

		// panggil method insertBook() di model 'book_model' untuk menjalankan query insert
		$this->book_model->insertBook($judul, $pengarang, $penerbit, $thnterbit, $sinopsis, $idkategori, $filename);

		// arahkan ke method 'books' di kontroller 'dashboard'
		redirect('dashboard/books');
	}

	// method untuk edit data buku berdasarkan id
	public function edit($idbuku){
		$this->load->model('book_model');
		// target direktori fileupload
		$target_dir = "c:/xampp/htdocs/books/assets/images/";
		
		// baca nama file upload
		$filename = str_replace('-', '_', $_FILES["imgcover"]["name"]);

		// menggabungkan target dir dengan nama file
		$target_file = $target_dir . basename($filename);

		// proses upload
		move_uploaded_file($_FILES["imgcover"]["tmp_name"], $target_file);

		// baca data dari form insert buku
		 $judul = $_POST['judul'];
		 $pengarang = $_POST['pengarang'];
		 $penerbit = $_POST['penerbit'];
		 $sinopsis = $_POST['sinopsis'];
		 $thnterbit = $_POST['thnterbit'];
		 $idkategori = $_POST['idkategori'];


		// panggil method insertBook() di model 'book_model' untuk menjalankan query insert
		$this->book_model->editBook($judul, $pengarang, $penerbit, $thnterbit, $sinopsis, $idkategori, $filename, $idbuku);

		// arahkan ke method 'books' di kontroller 'dashboard'
		
	}
	public function redirect_edit($idbuku){
			$this->load->model('book_model');
			$this->load->model('category_model');
			$data['kategori'] = $this->category_model->showCat();
			$data['books'] = $this->book_model->showBook();
			$data['fullname'] = $_SESSION['fullname'];
			$data['idbuku'] = $idbuku;

			$this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/edit');
            $this->load->view('dashboard/footer', $data);
        }
public function view($idbuku){
			$this->load->model('book_model');
			$this->load->model('category_model');
			$data['kategori'] = $this->category_model->showCat();
			$data['books'] = $this->book_model->showBook();
			$data['fullname'] = $_SESSION['fullname'];
			$data['idbuku'] = $idbuku;

			$this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/view', $data);
            $this->load->view('dashboard/footer', $data);
        }
	// 

	// method untuk mencari data buku berdasarkan 'key'
	public function findbooks(){
			$this->load->library('pagination');
			$this->load->model('book_model');
			$data['kategori'] = $this->book_model->getKategori();
			$data['countCat'] = $this->book_model->hitungKategori($data['kategori']);
			$key = "";
			if(isset($_POST['key'])){
				$key = $_POST['key'];
				$_SESSION['key'] = $key;
			}else{
				$key = $_SESSION['key'];
			}
			$datapagin = $this->book_model->findBook($key);
			$this->load->database();
            $config['base_url'] = site_url('dashboard/books'); //site url
            $config['total_rows'] =count($datapagin); //total row
            $config['per_page'] = 5;  //show record per halaman
            $config["uri_segment"] = 3;  // uri parameter
            $choice = $config["total_rows"] / $config["per_page"];
            $config["num_links"] = floor($choice);
 
            // Membuat Style pagination untuk BootStrap v4
            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = 'Next';
            $config['prev_link']        = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';
 
            $this->pagination->initialize($config);
            $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data['rowset'] =array_slice($datapagin, $data['page'], $config["per_page"]);
 
            

            $data['pagin'] = $this->pagination->create_links();

            
            $jumlahBuku = 0;
            foreach($data['countCat'] as $countCat){
                $jumlahBuku += $countCat['jum'];
                
            }
            $data['jumlahBuku'] = $jumlahBuku;

			

		$data['fullname'] = $_SESSION['fullname'];
		// baca key dari form cari data
		$key = $_POST['key'];

		// panggil method findBook() dari model book_model untuk menjalankan query cari data
		$data['book'] = $this->book_model->findBook($key);

		// tampilkan hasil pencarian di view 'dashboard/books'
		$this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/books', $data);
        $this->load->view('dashboard/footer');
	}

}
?>