<?php 

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 * 		http://localhost/abbort/index.php/Login
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 * 		http://localhost/abbort/index.php/Login/index
	 * - or -
	 * 		http://example.com/index.php/welcome/index
	 * 		http://localhost/abbort/index.php/Login/index
	 *	- or -
	 * Since this controller is set as the default controller in config/routes.php, it's displayed at:
	 *  	http://example.com/
	 * 		http://localhost/abbort/
	 *
	 * - or - 
	 * Since you have the .htaccess with some code in your main directory, you can also use this
	 * 		http://localhost/abbort/Login/index
	 * 
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
?>


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['books'] = $this->home_model->fetch_books();
		$this->load->view('home', $data);
	}


	public function authors_view()
	{
		$this->load->view('authors_view');
	}


	public function books_view()
	{
		$this->load->view('books_view');
	}


	public function book_categories()
	{
		$this->load->view('book_categories');
	}
	

	public function academic_levels()
	{
		$this->load->view('academic_levels');
	}

	
	public function promotional_offers()
	{
		$this->load->view('promotional_offers');
	}

	
	public function packages()
	{
		$this->load->view('packages');
	}
	
	public function book_stores()
	{
		$this->load->view('book_stores');
	}

	
	public function about()
	{
		$this->load->view('about');
	}
	
	public function contact()
	{
		$this->load->view('contact');
	}

	
	public function level_primary()
	{
		$this->load->view('level_primary');
	}

	public function level_ordinary()
	{
		$this->load->view('level_ordinary');
	}

	
	public function level_advanaced()
	{
		$this->load->view('level_advanaced');
	}

	public function orders()
	{
		$data['orders'] = $this->home_model->fetch_orders();
		$this->load->view('orders', $data);
	}

	public function orders_form()
	{
		$data['books'] = $this->home_model->fetch_books();
		$this->load->view('orders_form', $data);
		// $this->load->view('orders_form');
	}


	

		public function fetch_orders()
		{
			$this->load->model('Home_model');
			$data['orders'] = $this->Home_model->fetch_orders();
		}


	public function fetch_books()
	{
		// $this->load->model('Home_model');
		$data['books'] = $this->Home_model->fetch_books();
		//$this->load->view('make_order_form',$data);
	}

	public function book_register()
	{

		$data = array(
						'name' 		=> $this->input->post('name'),
						'email'		=>$this->input->post('email'),
						'phone'	=>$this->input->post('phone'),

						'latitude'	=>$this->input->post('latitude'),
						'longitude'	=>$this->input->post('longitude'),
						'comment'	=>$this->input->post('comment')
					);

		$this->load->model('Home_model'); // autoload model
		$result=$this->Home_model->book_register($data);
		if($result)
		{
			echo  1;	
		}
		else
		{
			echo  0;	
		}

	}

} // End class Home 
