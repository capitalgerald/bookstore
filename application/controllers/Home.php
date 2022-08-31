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
		$this->load->view('home');
	}

}
