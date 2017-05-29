<?php

class Home extends CI_Controller{
	
	/*
	Check to make sure data is stored in session before landing page
	Else redirect to registration
	*/
	public function index(){
		if(!empty($this->session->userdata('name')) && !empty($this->session->userdata('dob')) && !empty($this->session->userdata('fav_color')))	
			$this->load->view('home');
		else
			redirect('Registration/index');
	}
}

?>