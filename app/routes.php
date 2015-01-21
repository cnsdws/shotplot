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

Route::get('/practice-match', function() {

    # The all() method will fetch all the rows from a Model/table
    $matches = Match::all();

    # Make sure we have results before trying to print them...
    if($matches->isEmpty() != TRUE) {

        # Typically we'd pass $books to a View, but for quick and dirty demonstration, let's just output here...
        foreach($matches as $match) {
            echo $match->id.' id'.' and '. $match->user_id.' user <br>';
        }
    }
    else {
        return 'No matches found';
    }

});

Route::get('/practice-firestring', function() {

    # The all() method will fetch all the rows from a Model/table
    $firestrings = Firestring::all();

    # Make sure we have results before trying to print them...
    if($firestrings->isEmpty() != TRUE) {

        # Typically we'd pass $books to a View, but for quick and dirty demonstration, let's just output here...
        foreach($firestrings as $firestring) {
            echo $firestring->id.' id'.' and '. $firestring->match_id.' match <br>';
        }
    }
    else {
        return 'No matches found';
    }

});

// Bind route parameters.
Route::model('match', 'Match');

// Show pages.
Route::get('/', 'PositionsController@index');


Route::get('/create', 'PositionsController@create');
Route::get('/edit/{match}', 'PositionsController@edit');
Route::get('/delete/{match}', 'PositionsController@delete');
Route::get('/myaccount', 'PositionsController@myaccount');

Route::get('/createfirestring', 'PositionsController@createfirestring');
Route::get('/editfirestring', 'PositionsController@editfirestring');
Route::get('/deletefirestring', 'PositionsController@deletefirestring');
Route::get('/indexfirestring', 'PositionsController@indexfirestring');

//Route::get('/list', 'TransactionsController@listTransactions');
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

Route::post('/createfirestring', 'PositionsController@handleCreateFireString');



Route::post('/signup', 
    array(
        'before' => 'csrf', 
        function() {

            $user = new User;
            $user->email    = Input::get('email');
            $user->password = Hash::make(Input::get('password'));

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




Route::get('/debug', function() {
		echo '<pre>';
		echo '<h1>environment.php</h1>';
		$path   = base_path().'/environment.php';
		try {
			$contents = 'Contents: '.File::getRequire($path);
			$exists = 'Yes';
		}
		catch (Exception $e) {
			$exists = 'No. Defaulting to `production`';
			$contents = '';
		}
		echo "Checking for: ".$path.'<br>';
		echo 'Exists: '.$exists.'<br>';
		echo $contents;
		echo '<br>';
		echo '<h1>Environment</h1>';
		echo App::environment().'</h1>';
		echo '<h1>Debugging?</h1>';
		if(Config::get('app.debug')) echo "Yes"; else echo "No";
		echo '<h1>Database Config</h1>';
		print_r(Config::get('database.connections.mysql'));
		echo '<h1>Test Database Connection</h1>';
		try {
			$results = DB::select('SHOW DATABASES;');
			echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
			echo "<br><br>Your Databases:<br><br>";
			print_r($results);
		}
		catch (Exception $e) {
			echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
		}
		echo '</pre>';

});