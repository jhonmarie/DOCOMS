<?php 
	
	 class RegisterController extends BaseController{

	// 	public function register(){
	// 		return View::make('register');
	// 	}

		public function addData(){
		
             $data = new Record();
			 $data->file_no = Input::get('file_no');
			 $data->receiveby = Input::get('rb');
             $data->for = Input::get('for');
             $data->office = Input::get('office');
             $data->address = Input::get('address');
             $data->subject = Input::get('sub');
             $data->ctn = Input::get('ctn');
             $data->rep = Input::get('rep');
             $data->remarks = Input::get('remarks');
			 $data->date_receive = Input::get('dr');
             $data->time_receive = Input::get('tr');
             $data->save();
             
			return View::make('welcomes'); 
		}

		public function downloadRecord(){
			 $pdf = PDF::loadView('print');
             return $pdf->stream();
		}
 }

      

?>