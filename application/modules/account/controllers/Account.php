<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends MX_Controller {
	public function signUp()
	{
		$this->load->view("signup");
	}
}
