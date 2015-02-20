<?php
class LoginController extends BaseController {
	/**
	*Controller used for various actions to create, update and deletd stock positions and to record
	* stock transactions.
	*/
	public function signup()
	{
		
		return View::make('signup');
		
		
	}
   	

	public function login()
	{
		return View::make('login');
		
	}

	

}
