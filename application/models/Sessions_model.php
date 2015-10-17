<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sessions_model extends MY_Model {

	/**
	 * Specify the primary table to execute queries on
	 *
	 * @var string
	 */
	public $_table = 'sessions';
	
	public $primary_key = 'id';


	public function __construct()
	{
		parent::__construct();
	}
	

}

/* End of file Sessions_model.php */
/* Location: ./application/models/Sessions_model.php */