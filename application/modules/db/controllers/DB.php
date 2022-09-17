<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DB extends MX_Controller {
	public function index()
	{
		$id = $this->db_model->insert_data("test",array("randum_key"=>rand(1000,5000)));
		$this->load->view("db_index",compact('id'));
	}
}
