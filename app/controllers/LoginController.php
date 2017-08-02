<?php
	class LoginController extends BaseController{

		public function login(){
			return View::make('login');
		}

		public function get_login_details(){
			$user = Input::get('username');
			$pass = Input::get('password');

			return 'Username: '.$user.'<br>'.'Password: '.$pass;
		}

	}

?>
