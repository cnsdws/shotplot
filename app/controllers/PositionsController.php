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
		
		$user = Auth::id();
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
		$match = new Match;
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

	public function createfirestring()
	{
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
		$matches = Match::where('user_id','=', Auth::user()->id)->get();
		$firestrings = Firestring::where('match_id', '=', Auth::user()->id)->get();
		return View::make('indexfirestring', compact('firestrings'), compact('matches'));

	}


	

}
