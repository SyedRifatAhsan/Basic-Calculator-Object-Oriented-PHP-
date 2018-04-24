<?php

	class dbh{

		private $server;
		private $user;
		private $password;
		private $db;
		

		/*public function __construct($server,$user,$password,$db){

			$this->server=$server;
			$this->user=$user;
			$this->password=$password;
			$this->db=$db;
		}*/

		protected function connect(){

			$this->server="localhost";
			$this->user="root";
			$this->password="";
			$this->db="oophp";

			$conn = new mysqli($this->server,$this->user,$this->password,$this->db);

			return $conn;
		}
	}

?>