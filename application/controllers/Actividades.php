<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actividades extends CI_Controller {

	public function index()
	{
		
		$this->load->view('v_actividades');
	}
}