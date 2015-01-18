<?php
class PositionsController extends BaseController {
	/**
	*Controller used for various actions to create, update and deletd stock positions and to record
	* stock transactions.
	*/
	public function index()
	{
		$user = Auth::id();
		// Show a listing of stocks.
		//$matches = Match::where('owner','=', Auth::user()->id)->get();
		return View::make('index');
		// Show a listing of stock positions.
		//return View::make('index');
	}

	public function create()
	{
		// Show the create stock position form.
		return View::make('create');
	}

	public function handleCreate()
	{
		
		return Redirect::action('PositionsController@index');
	}

	public function edit()
	{
		// Show the edit position form.
		return View::make('index');
	}

	public function handleEdit()
	{
		
		return Redirect::action('PositionsController@index');

	}

	public function delete()
	{
		// Show delete confirmation page.
		return View::make('delete');
		
	}

	public function handleDelete()
	{
		// Handle the delete confirmation.
		
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
		return View::make('indexfirestring');
	}


	

}
