<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends MY_Controller {
		
		public function __construct()
		{
			parent::__construct();
		}

		function about(){
		$this->title = 'About Company';
		$this->load->view('layout/_header');
		$this->load->view('pages/about');
		$this->load->view('layout/_footer');
		}

		function contact(){
		$this->title = 'Contact Company';
		$this->load->view('layout/_header');
		$this->load->view('pages/contact');
		$this->load->view('layout/_footer');
		}
}

/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */