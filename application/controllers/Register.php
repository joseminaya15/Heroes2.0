<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('M_datos');
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
    }

	public function index()
	{
		$this->load->view('v_register');
	}
	function cerrarCesion(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $this->session->unset_userdata('usuario');
            $data['error'] = EXIT_SUCCESS;
        } catch (Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
	function registrar(){
		$data['error'] = EXIT_ERROR;
		$data['msj']   = null;
		try {
			$nombre		= $this->input->post('nombre');
			$apellido	= $this->input->post('apellido');
			$usuario	= $this->input->post('usuario');
			$email		= $this->input->post('email');
			$pass		= $this->input->post('pass');
			$confirm	= $this->input->post('confirm');
			$termino	= ($this->input->post('termino') == true) ? 1 : 0;
			$arrayInsert= array ('nombre' 	=> $nombre,
								 'apellido' => $apellido,
								 'username' => $usuario,
								 'pass' 	=> $pass,
								 'rep_pass' => $confirm,
								 'email' 	=> $email,
								 'terminos' => $termino,
								 'active' 	=> 1,
								 'type'		=> 1);
			$this->M_datos->insertHeroe($arrayInsert, 'users');
			$data['error'] = EXIT_SUCCESS;
			$data['msj'] = 'Registro exitoso';
		} catch(Exception $e) {
           $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
	}
}