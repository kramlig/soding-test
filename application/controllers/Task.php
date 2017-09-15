<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Main_model", "Main");
		date_default_timezone_set('Asia/Manila');

		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
		$this->output->set_header('Pragma: no-cache');
	}


	public function index()
	{
		$this->load->view('task/create_task');
	}

	public function addNewTask(){

		$data = array(
			'name'				=> html_escape($this->security->xss_clean($this->input->post('name'))),
			'description'		=> html_escape($this->security->xss_clean($this->input->post('desc'))),
			'dateCreated'		=> date("Y-m-d")
		);
		
		$this->db->insert('task_table', $data);

		redirect($this->uri->segment(1), 'Done');	
	}

	public function listAllTask(){

		$data['result'] = $this->Main->getAllTask();

		$this->load->view('viewAll', $data);	
	}

	public function delete()
	{	
		$this->db->where('id', $this->input->post('id'));
  		$this->db->delete('task_table'); 

		echo json_encode(true);
		
	}

	public function update()
	{	

		$this->db->update('task_table', 
			array(
				'name' 		=> $this->input->post('name'),
				'description' => $this->input->post('desc'),
				'dateUpdated' => date("Y-m-d")
			) , 
			array('id' => $this->input->post('id'))
		);

		echo json_encode(true);
		
	}
}
