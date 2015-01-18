<?php
class TransactionsController extends BaseController {
	/**
	*Controller used for various actions to create, update and deletd stock positions and to record
	* stock transactions.
	*/
	public function listTransactions()
	{
		
		// Show a listing of transactions.
		$transactions = Transaction::where('owner','=', Auth::user()->id)->get();
		return View::make('listTransactions', compact('transactions'));
		
	}
	
}