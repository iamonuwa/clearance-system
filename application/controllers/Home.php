<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();	
		$this->load->model(array('gender_model','department_model','tracking_model'));
	}

	public function index()
	{
		if($this->aauth->is_loggedin()){
			redirect(base_url('user/dashboard'),'refresh');
		}
		$this->title = 'HomePage';
		$this->load->view('layout/_header');
		$this->load->view('index');
		$this->load->view('layout/_footer');
	}
	public function login()
	{
		if($this->aauth->is_loggedin()){
			$this->redirect_url();
		}
		if($this->input->post()){
			$id = $this->input->post('email');
			$password = $this->input->post('password');
			$check = $this->aauth->login($id, $password);
			if($check){
				$this->redirect_url();
			}
			else{
				$this->session->set_flashdata('msg', $this->aauth->print_errors());
				$this->redirect_url();
			}
		}
		$this->redirect_url();
	}

	public function create()
	{
		if($this->aauth->is_loggedin()){
			$this->redirect_url();
		}
		if($this->input->post()){
			$name 			= html_escape($this->input->post('name'));
			$pin  			= html_escape($this->input->post('pin'));
			$phone			= html_escape($this->input->post('phone'));
			$email			= html_escape($this->input->post('email'));
			$pass 			= html_escape($this->input->post('password'));
			$c_password		= html_escape($this->input->post('c_password'));
			$department		= html_escape($this->input->post('department'));
			$gender			= html_escape($this->input->post('gender'));
			$check			= $this->aauth->create_user($name, $pin, $phone, $email, $pass, $department, $gender);
			if($check){
				$this->session->set_flashdata('success', 'Your Account Has Been Created!');
				$this->redirect_url();
			}
			else{
				$this->session->set_flashdata('msg', $this->aauth->print_errors());
				$this->redirect_url();
			}
		}else{
		$this->title = 'Create Account';
		$data['department'] = $this->department_model->get_all();
		$data['gender'] = $this->gender_model->get_all();
		$this->load->view('layout/_header');
		$this->load->view('auth/register', $data);
		$this->load->view('layout/_footer');
		  }
	}
	public function forgot()
	{
		if($this->aauth->is_loggedin()){
			$this->redirect_url();
		}
		if($this->input->post()){
			$email = $this->input->post('email');
			$check = html_escape($this->aauth->remind_password($email));
			if($check){
				$this->session->set_flashdata('success', 'A Password Verification Link Has Been Sent To Your Email Address');
				$this->redirect_url();
			}
			else{
				$this->session->set_flashdata('msg', 'An Error Occured. Please try again later');
				$this->redirect_url();
				}
		}
		$this->title = 'Forgot Password';
		$this->load->view('layout/_header');
		$this->load->view('auth/reset');
		$this->load->view('layout/_footer');
	}
	public function logout()
	{
		if($this->uri->segment(2) === 'logout'){
			$this->aauth->logout();
			redirect(base_url(),'refresh');
       }
	}

	public function dashboard()
	{
		if(!$this->aauth->is_loggedin()){
			$this->redirect_url();
		}
		$this->title = $this->aauth->get_user()->name. "'s Dashboard";
		$this->load->view('layout/_header');
		$this->load->view('users/dashboard');
		$this->load->view('layout/_footer');
	}
	public function modify()
	{
		if(!$this->aauth->is_loggedin()){
			$this->redirect_url();
		}
		$this->title = "Modify Account";
		$this->load->view('layout/_header');
		$this->load->view('users/edit');
		$this->load->view('layout/_footer');
	}
}
