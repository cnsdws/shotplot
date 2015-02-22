<?php
class PositionsController extends BaseController {
	/**
	*Controller used for various actions to create, update and deletd matches and firestrings.
	*/
	public function index()
	{
		$user = Auth::id();
		// Show a listing of shooting matches.
		$matches = Match::where('user_id','=', Auth::user()->id)->get();
		return View::make('index', compact('matches'));
		
	}

	public function create()
	{
		// Show the create shooting match form.
		return View::make('create');
	}

	public function handleCreate()
	{
		// Handle the form for creating a shooting match

		//validation
		$rules = array(
			    'place' => 'required',
    			'date' => 'required'   
			);          

			$validator = Validator::make(Input::all(), $rules);

			if($validator->fails()) {

    			return Redirect::to('/create')
        			->with('flash_message', 'Create Match failed; please fix the errors listed below:')
        			->withInput()
        			->withErrors($validator);
			}
		
		$match = new Match;
		$match->place = Input::get('place');
		$match->date = Input::get('date');
		$match->riflenumber = Input::get('riflenumber');
		$match->rangename = Input::get('rangename');
		$match->user_id = Auth::id(); 
		$match->save();
		
		return Redirect::action('PositionsController@index');
	
	}

	public function edit(Match $match)
	{
		// Show the edit position form.
		return View::make('edit', compact('match'));
	}

	public function handleEdit()
	{
		
		// Handle edit form submission.
		$user = Auth::id();
		$match = Match::findOrFail(Input::get('id'));
		
		$match->place = Input::get('place');
		$match->date = Input::get('date');
		$match->riflenumber = Input::get('riflenumber');
		$match->rangename = Input::get('rangename');
		$match->user_id = Auth::id(); 
		$match->save();

		return Redirect::action('PositionsController@index');


	}

	public function delete(Match $match)
	{
		// Show delete confirmation page.
		return View::make('delete', compact('match'));
		
	}

	public function handleDelete()
	{
		/// Handle the delete confirmation.
		$user = Auth::id();
		$id = Input::get('match');
		$match = Match::findOrFail($id);
		
		$match->delete();

		return Redirect::action('PositionsController@index');

	}

	public function myaccount()
	{
		// Show delete confirmation page.
		$id = Auth::user()->id;
		
		return View::make('myaccount', compact('id'));
		
	}

	public function handleMyAccount()
	{
		Auth::user()->email = Input::get('email');
		Auth::user()->firstname = Input::get('firstname');
		Auth::user()->lastname = Input::get('lastname');
		Auth::user()->save();
        return Redirect::action('PositionsController@index');
	}
	

	public function updatePassword()
	{
		$validator = Validator::make(Input::all(), 
			array(
					'oldpassword' => 'required',
					'newpassword' => 'required|min:6',
					'confirmpassword' => 'required|same:newpassword'
				)
			);

		if($validator->fails()) {

    		return Redirect::to('/myaccount')
        		->with('flash_message', '<br> <p class="bg-danger">Password Change failed; please fix the errors listed below.</p>')
        		->withErrors($validator);
			}
            # Try to add the user 
        else
        {
			$user = User::find(Auth::user()->id);
			$oldpassword = Input::get('oldpassword');
			$newpassword = Input::get('newpassword');
			
			if(Hash::check($oldpassword, $user->getAuthPassword()))
			{
				$user->password = Hash::make($newpassword);

				if($user->save())
				{
					return Redirect::to('/myaccount')
					->with('flash_message','<br> <p class="bg-success">Your password has been changed!</p>');
				}
			}

        } 
           return Redirect::to('/myaccount')
           ->with('flash_message','<br><p class="bg-danger">Your password could not be changed!</p>') ;

	}

	
	
	public function editFirestring($id)
	{
		$firestring = Firestring::find($id);
		return View::make('editfirestring', array(
			'firestring'=>$firestring
			));
	}

	public function handleEditFirestring($id)
	{
		$firestring = Firestring::findOrFail(Input::get('id'));
		$match_id = $firestring->match_id;
		$firestring->fire_string_number = Input::get('fire_string_number');
		$firestring->distance = Input::get('distance');
		$firestring->target = Input::get('target');
		$firestring->relay = Input::get('relay');
		$firestring->lightdirection = Input::get('lightdirection');
		$firestring->winddirection = Input::get('winddirection');
		$firestring->windspeed = Input::get('windspeed');
		$firestring->elevation = Input::get('elevation');
		$firestring->windage = Input::get('windage');

		
		$firestring->save();

		return Redirect::to('indexfirestring/'.$match_id);

		

	}


	public function deleteFirestring($id)
	{
		// Show delete confirmation page.
		$firestring = Firestring::find($id);
		return View::make('deletefirestring', array(
			'firestring'=>$firestring
			));
	}



	public function handleDeleteFirestring($id)
	{
		/// Handle the delete confirmation.
		$firestring = Firestring::find($id);
		$match_id = $firestring->match_id;
		$firestring->delete();

		return Redirect::to('indexfirestring/'.$match_id);

	}

	public function indexFirestring($id)
	{
		$user = Auth::user();
		$match = Match::find($id);
		$firestrings = Firestring::where('match_id', $match->id)->get();

		return View::make('indexfirestring', array(
			'match'=> $match,
			'firestrings' => $firestrings
			));
	}

	public function createFirestring($match_id)
	{
		// Display the form for creating a shooting match
	
		return View::make('createfirestring', array(
			'match_id'=> $match_id
		));
	}

	public function handleCreateFirestring()
	{
		//validation
		$rules = array(
			    'fire_string_number' => 'required',
			    'distance' => 'required'   
			);          

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {

    		return Redirect::to('/createfirestring/{{$match->id}}')
        		->with('flash_message', 'Create Firestring failed; please fix the errors listed below:')
        		->withInput()
        		->withErrors($validator);
		}
		$firestring = new Firestring;
		$match = Match::findOrFail(Input::get('match_id'));
		$firestring->fire_string_number = Input::get('fire_string_number');
		$firestring->distance = Input::get('distance');
		$firestring->target = Input::get('target');
		$firestring->relay = Input::get('relay');
		$firestring->lightdirection = Input::get('lightdirection');
		$firestring->winddirection = Input::get('winddirection');
		$firestring->windspeed = Input::get('windspeed');
		$firestring->elevation = Input::get('elevation');
		$firestring->windage = Input::get('windage');
		$firestring->shot1value = Input::get('shot1value');
		$firestring->shot2value = Input::get('shot2value');
		$firestring->shot3value = Input::get('shot3value');
		$firestring->shot4value = Input::get('shot4value');
		$firestring->shot5value = Input::get('shot5value');
		$firestring->shot6value = Input::get('shot6value');
		$firestring->shot7value = Input::get('shot7value');
		$firestring->shot8value = Input::get('shot8value');
		$firestring->shot9value = Input::get('shot9value');
		$firestring->shot10value = Input::get('shot10value');
		$firestring->match()->associate($match);
		
		$firestring->save();

		return Redirect::to('/indexfirestring/'.$match->id);
	}

	public function displayFirestring($id)
	{
		$firestring = Firestring::find($id);
		return View::make('displayfirestring', array(
			'firestring'=>$firestring
			));
	}


	

}
