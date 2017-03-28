<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function get_data(){
		$qy=$this->db->query("SELECT * FROM `shownow`");
		$data=$qy->result_array();
		return $data;
	}

	

}

/* End of file db_model.php */
/* Location: ./application/models/db_model.php */
?>