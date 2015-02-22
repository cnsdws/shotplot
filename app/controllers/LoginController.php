<?php
class LoginController extends BaseController {
	/**
	*Controller used for various actions to login, logout and access the signup page.
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
   		return Redirect::to('/');
	}
	

}
