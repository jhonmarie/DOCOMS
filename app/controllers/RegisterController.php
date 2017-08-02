<?php 
	
	 class RegisterController extends BaseController{

	// 	public function register(){
	// 		return View::make('register');
	// 	}

		public function addData(){
		
             $data = new Record();
			  $data->file_no = Input::get('file_no');
             $data->for = Input::get('for');
             $data->office = Input::get('office');
             $data->address = Input::get('address');
             $data->subject = Input::get('sub');
             $data->receiveby = Input::get('rb');
			 $data->date_receive = Input::get('dr');
             $data->time_receive = Input::get('tr');
             $data->save();
             
			return View::make('Welcome'); 
		}

	} 



?>