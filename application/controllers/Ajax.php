<?php

class Ajax extends CI_Controller
{
	/*
	Insert data into database via ajax
	*/
	public function register(){
		$name = $this->input->post('name');
		$dob = $this->input->post('dob');
		$email = $this->input->post('email');
		$fav_color = $this->input->post('fav_color');
		
		$this->load->model('RegistrationModel');
		
		$this->RegistrationModel->register($name, $dob, $email, $fav_color);
	}
}


?>