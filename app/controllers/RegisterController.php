<?php 
	
	class RegisterController extends BaseController{

		// public function register(){
		// 	return View::make('register');
		// }

		// public function register_confirmation(){
		// 	echo 'You have registered!<br><br>';

		// 	return View::make('login'); 
		// }

		public function addData(){
			$data = new Record();
			$data->recieveby = Input::get('recieveby');
			$data->for = Input::get('for');
			$data->office = Input::get('office');
			$data->address = Input::get('address');
			$data->sub = Input::get('sub');
			$data->save();

			return View::make('practice');
			
		}

	} 



?>