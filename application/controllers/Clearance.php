<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Clearance extends Frontend_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model(array('tracking_model','gender_model','department_model','sessions_model'));
		}

		public function index()
		{
			if(!$this->aauth->is_loggedin()){
			redirect(base_url(),'refresh');
		}
			if(!$this->aauth->is_member('Department')){
				redirect(base_url(),'refresh');
			}
		$this->title = 'View Clearance Application';
		$data['clearance'] = $this->tracking_model->get_all();
		$this->load->view('layout/_header');
		$this->load->view('clearance/index',$data);
		$this->load->view('layout/_footer');	
		}

		public function status($department_id)
		{
			if(!$this->aauth->is_loggedin()){
			redirect(base_url(),'refresh');
		}
			if(!$this->aauth->is_member('User')){
				redirect(base_url(),'refresh');
			}
		$this->title = 'My Application Status';
		$data['status'] = $this->tracking_model->get_all();
		$data['department'] = $this->department_model->get_by('id', $department_id);
		$this->load->view('layout/_header');
		$this->load->view('clearance/status',$data);
		$this->load->view('layout/_footer');
		}

		public function create()
		{
		if($this->tracking_model->get_many($this->session->userdata('id'))){
			$this->session->set_flashdata('msg', 'You Have A Pending Application '.anchor(base_url('clearance/status/'.$this->input->post('department_id')), 'Check Current Status'));
			$this->redirect_url();
		}else{
			if(!$this->aauth->is_loggedin()){
			redirect(base_url(),'refresh');
		}
		if(!$this->aauth->is_member('User')){
				redirect(base_url(),'refresh');
		}
		if($this->input->post()){
			$data['user_id']= $this->session->userdata('id');
			$data['session']= html_escape($this->input->post('sessions'));
			$data['department_id']= '1';
			$data['status'] = 'Not Cleared!';

			$check = $this->tracking_model->insert($data, $skip_validation = TRUE);
			if($check){
				$this->session->set_flashdata('success', 'Your Application Has Been Received. '.anchor(base_url('clearance/status/'.$this->input->post('department_id')), 'Check Current Status'));
				redirect(base_url('clearance/view'),'refresh');
			}
		}
		else{
		$this->title = 'Clearance Application';
		$data['department'] = $this->department_model->get_all();
		$data['gender'] = $this->gender_model->get_all();
		$data['sessions'] = $this->sessions_model->get_all();
		$this->load->view('layout/_header');
		$this->load->view('clearance/add',$data);
		$this->load->view('layout/_footer');
				}
			}
		}
		public function modify($param)
		{
		if(!$this->aauth->is_member('User')){
				redirect(base_url(),'refresh');
		}
			if(!$this->aauth->is_loggedin()){
			redirect(base_url(),'refresh');
		}
		$this->title = 'Clearance Application';
		$this->load->view('layout/_header');
		$this->load->view('clearance/add');
		$this->load->view('layout/_footer');
		}
}

/* End of file Clearance.php */
/* Location: ./application/controllers/Clearance.php */