<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('form_model');  
	}

	 public function index()
	{
	
	$this->load->view('formulario');
}


	function validar()
{

		
		$name = $this->input->post('nombre');
		$lastname = $this->input->post('apellido');
		$email = $this->input->post('correo');

		echo"Nombre:".$name."Apellido:".$lastname."Correo:".$email;


		$data = array('nombre' => $this->input->post('nombre'),'apellido' => $this->input->post('apellido'),'correo' => $this->input->post('correo'));


		$this->form_model->guardar($data);



		
	}
}
