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
   	

	public function loginnow()
	{
		return View::make('login');
		
	}


	public function logoutnow()
	{
		# Log out
    	Auth::logout();

    	# Send them to the homepage
   		return View::make('login');
	}
	

}
