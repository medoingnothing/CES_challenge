<?php

class Registration extends CI_Controller
{
	public function index(){
		$this->load->view('registration');
	}
	
	/**
	Server side validation for name and fav_color fields
	*/
	public function checkRegistration(){
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('fav_color', 'Favorite color', 'required');
		
		if($this->form_validation->run() == false){
			$this->load->view('registration.php');
		}
		else{
			$this->addUser();
			redirect('Home/');
		}
	}
	/*
	Once validated insert data into the database
	*/
	public function addUser(){
		$name = $this->input->post('name');
		$dob = $this->input->post('dob');
		$email = $this->input->post('email');
		$fav_color = $this->input->post('fav_color');
		$this->load->model('RegistrationModel');
		$this->RegistrationModel->register($name, $dob, $email, $fav_color);
	
	}
	
	
}




?>