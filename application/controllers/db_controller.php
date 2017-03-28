
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_model');
		//Do your magic here
	}

	public function index()
	{
		
		$data['items']=$this->db_model->get_data();
		
		$this->load->view('db_view', $data, FALSE);
	}
	public function showregister(){
		$data['items']=$this->db_model->get_dataregister();
		$this->load->view('viewregister', $data, FALSE);

	}

}

/* End of file db_controller.php */
/* Location: ./application/controllers/db_controller.php */
?>