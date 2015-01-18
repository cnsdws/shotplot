<?php
class BaseController extends Controller {
	/**
	*
	*/
	public function __construct() {
		# Any submissions via POST need to pass the CSRF filter
		$this->beforeFilter('csrf', array('on' => 'post'));
		$this->beforeFilter('auth', array('except' => 'signup'));

		
	}
}
