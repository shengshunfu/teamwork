<?php namespace App\Http\Controllers;

use GuzzleHttp\Client;

class TestController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Test Controller
	|--------------------------------------------------------------------------
	|
	| Only for Tests
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('guest');
	}

	/**
	 *	
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$client = new Client();
    	$res = $client->get('http://httpbin.org');

    	dd($res);
	}

}
