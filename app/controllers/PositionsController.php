<?php
class PositionsController extends BaseController {
	/**
	*Controller used for various actions to create, update and deletd stock positions and to record
	* stock transactions.
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
		return View::make('myaccount');
		
	}

	public function CreateFireString()
	{
		// Handle the form for creating a shooting match
	
		return View::make('createfirestring');
	}
	
	public function editfirestring()
	{
		return View::make('editfirestring');
	}

	public function deletefirestring()
	{
		return View::make('deletefirestring');
	}

	public function indexfirestring()
	{
		$firestrings = Firestring::with('match')->where('match_id', '=', '$firestring->matches->id')->get();
		return View::make('indexfirestring', compact('firestrings'));

	}

	public function handleCreateFireString()
	{
		
		$firestring = new Firestring;
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
		$firestring->match_id = $match->id;

		$firestring->save();
		
		return Redirect::action('PositionsController@indexfirestring');
	}
	

}
