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
	
	$this->load->view('eval3');
}


	function validar()
{

		
		$name = $this->input->post('nombre1');
		$lastname = $this->input->post('apellido1');

		echo "Nombre: ".$name."  Apellido: ".$lastname;


		$data = array('nombre' => $this->input->post('nombre1'),'apellido' => $this->input->post('apellido1') );

		$this->form_model->guardar($data);


		$this->load->view('formulario');
	}
}
