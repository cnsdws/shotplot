<?php
class MatchesController extends BaseController {
	/**
	*Controller used for various actions to create, update and delete shooting matches.
	*
	*/

	public function index()
	{
		
		return View::make('index'); 
		
	}

	public function create()
	{
		
		return View::make('create'); 
		
	}

	public function handleCreate()
	{
		
		// 
		
	}

	public function edit(Match $match)
	{
		
		return View::make('edit'); 
		
	}

	public function handleEdit()
	{
		
		// 
		
	}

	public function delete()
	{
		
		return View::make('delete'); 
		
	}

	public function handleDelete()
	{
		
		// 
		
	}
 }
