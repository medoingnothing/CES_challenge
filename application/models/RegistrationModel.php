<?php

class RegistrationModel extends CI_Model{
	
	
	/*
	Check to make sure name and fav_color fields not empty
	Insert data into database
	Store data in sessions
	*/
	public function register($name, $dob, $email, $fav_color){
		
		if(!empty($name) && !empty($fav_color)){
		
		//make sure date is in correct format
		$dob = nice_date($dob, 'Y-m-d');
			
		$data = array(
			'name' => $name,
			'dob' => $dob,
			'email' => $email,
			'fav_color' => $fav_color
		);
		$this->db->insert('user', $data);
		$this->set_session($name, $dob, $fav_color);
		}
	}
	/*
	Save data into session variables
	*/
	public function set_session($name, $dob, $fav_color){
		$data = array(
			'name' => $name,
			'dob' => $dob,
			'fav_color' => $fav_color
		);
		
		$this->session->set_userdata($data);
	}
	
	
	
}

?>