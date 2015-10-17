<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Gender_model extends MY_Model {

	/**
	 * Specify the primary table to execute queries on
	 *
	 * @var string
	 */
	public $_table = 'gender';
	
	public $primary_key = 'id';


	public function __construct()
	{
		parent::__construct();
	}

}

/* End of file Gender_model.php */
/* Location: ./application/models/Gender_model.php */