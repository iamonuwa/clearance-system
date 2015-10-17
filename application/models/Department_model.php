<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Department_model extends MY_Model {

	/**
	 * Specify the primary table to execute queries on
	 *
	 * @var string
	 */
	public $_table = 'department';
	
	public $primary_key = 'id';


	public function __construct()
	{
		parent::__construct();
	}

	public function find_by($param)
	{
		$this->get_by($param);
	}
	

}

/* End of file Department_model.php */
/* Location: ./application/models/Department_model.php */