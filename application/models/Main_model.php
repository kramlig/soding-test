<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getAllTask(){
		$sql = "SELECT * FROM soding_test.task_table";

		$query = $this->db->query($sql);

		return $query->result();
	}
}