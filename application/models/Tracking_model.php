<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tracking_model extends MY_Model {

	/**
	 * Specify the primary table to execute queries on
	 *
	 * @var string
	 */
	public $_table = 'tracking';
	
	public $primary_key = 'id';


	public function __construct()
	{
		parent::__construct();
	}
	

}

/* End of file Tracking_model.php */
/* Location: ./application/models/Tracking_model.php */