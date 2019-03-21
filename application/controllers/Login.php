<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->helper('form');
		$this->load->view('admLogin');
	}

	public function validarLogin(){

		echo "<script>alert('".$this->input->post('cpf')."');</script>";
	}
}
