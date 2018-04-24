<?php

	class ViewUser extends User{

		

		public function showAllUsers(){

			$datas = $this->getAllUsers();
			foreach($datas as $data){
				echo $data['uid'].'<br>';
				echo $data['id'].'<br>';
				echo $data['pass'].'<br>';	
			}

		}

	}
?>