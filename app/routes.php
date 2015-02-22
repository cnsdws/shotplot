<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Bind route parameters.
Route::model('match', 'Match');
Route::model('firestring','Firestring');

// Show pages.
Route::get('/', 'PositionsController@index');
Route::get('/match', 'PositionsController@index');


Route::get('/create', 'PositionsController@create');
Route::get('/edit/{match}', 'PositionsController@edit');
Route::get('/delete/{match}', 'PositionsController@delete');
Route::get('/myaccount', 'PositionsController@myaccount');

Route::get('/createfirestring/{id}', 'PositionsController@createFirestring');
Route::get('/editfirestring/{id}', 'PositionsController@editFirestring');
Route::get('/deletefirestring/{id}', 'PositionsController@deleteFirestring');
Route::get('/indexfirestring/{id}', 'PositionsController@indexFirestring');
Route::get('/firestring/{id}', 'PositionsController@indexFirestring');
Route::get('/displayfirestring/{id}', 'PositionsController@displayFirestring');


Route::get('/signup',
   array(
       'before' => 'guest',
       function() {
           return View::make('signup');
           }
       )
   );
Route::get('/login',
    array(
        'before' => 'guest',
        function() {
            return View::make('login');
        }
    )
);
    


Route::get('/logout', function() {

    # Log out
    Auth::logout();

    # Send them to the homepage
    return View::make('login');

});


// Handle form submissions.
Route::post('/create', 'PositionsController@handleCreate');
Route::post('/edit', 'PositionsController@handleEdit');
Route::post('/delete', 'PositionsController@handleDelete');
Route::post('/myaccount', 'PositionsController@handleMyAccount');
Route::post('/updatepassword', 'PositionsController@updatePassword');

Route::post('/createfirestring', 'PositionsController@handleCreateFirestring');
Route::post('/deletefirestring/{id}', 'PositionsController@handleDeleteFirestring');
Route::post('/editfirestring/{id}', 'PositionsController@handleEditFirestring');




Route::post('/signup', 
    array(
        'before' => 'csrf', 
        function() {

            $user = new User;
            $user->email    = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->firstname = Input::get('firstname');
            $user->lastname = Input::get('lastname');

			$rules = array(
			    'email' => 'email|unique:users,email',
    			'password' => 'min:6'   
			);          

			$validator = Validator::make(Input::all(), $rules);

			if($validator->fails()) {

    		return Redirect::to('/signup')
        		->with('flash_message', 'Sign up failed; please fix the errors listed below.')
        		->withInput()
        		->withErrors($validator);
}
            # Try to add the user 
            try {
                $user->save();
            }
            # Fail
            catch (Exception $e) {
                return Redirect::to('/signup')->with('flash_message', 'Sign up failed; please try again.')->withInput();
            }

            # Log the user in
            Auth::login($user);

            return Redirect::to('/');

       	}
   	)
);

Route::post('/login', 
    array(
        'before' => 'csrf', 
        function() {

            $credentials = Input::only('email', 'password');

            if (Auth::attempt($credentials, $remember = true)) {
                return Redirect::intended('/');
            }
            else {
                return Redirect::to('/login')->with('flash_message', 'Log in failed; please try again.');
            }

            return Redirect::to('login');
        }
    )
);