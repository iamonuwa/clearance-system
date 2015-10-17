<?php defined('BASEPATH') OR exit('No direct script access allowed');



class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->session->set_userdata('redirect_back', $this->agent->referrer()); 
	}

	public function redirect_url()
	{
	if( $this->session->userdata('redirect_back') ) {
   	$redirect_url = $this->session->userdata('redirect_back'); 
   	$this->session->unset_userdata('redirect_back');
   	redirect( $redirect_url );
   		}
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */