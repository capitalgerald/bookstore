<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Home_model extends CI_Model
	{

		public function fetch_books()
		{
			// $this->load->view('fetch_books');
			$sql = "SELECT * FROM books ORDER BY books.id DESC;";
				$query = $this->db->query($sql); 
				return $query->result();
		}


		public function fetch_orders()
		{
			// $this->load->view('fetch_books');
			$sql = "SELECT * FROM orders ORDER BY orders.id DESC;";
				$query = $this->db->query($sql); 
				return $query->result();
		}


		public function book_register($data) 
		{
			if($this->db->insert('orders',$data))
			{
				return 1;	
			}
			else
			{
				return 0;	
			}
	    }

	}