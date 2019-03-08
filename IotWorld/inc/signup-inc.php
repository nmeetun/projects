<?php

/*
first name
last name
email
password



*/

class users{
	private $firstName;
	private $lastName;
	private $email;
	private $password;
	private $address;

	public function __construct($firstName,$lastName,$email,$password){

		$this.firstName -> _Post["Firstname"];
		$this.lastName -> $lastName;
		$this.email -> $email;
		$this.password -> $password;


		public function get_firstName(){
			return $this.firstName;
		}

		public function set_firstName($firstName){
			$this.firstName = $firstName;
		}

		public function get_lastName(){
			return $this.lastName;
		}

		public function set_lastName($lastName){
			$this.lastName = $lastName;
		}

		public function get_email(){
			return $this.email;
		}

		public function set_email($email){
			$this.email = $email;
		}

		public function get_password(){
			return $this.password;
		}

		public function set_password($password){
			$this.password = $password;
		}
	}


}