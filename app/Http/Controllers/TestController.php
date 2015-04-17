<?php namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Request;

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
		//return "Test";
		$request = Request::create(
		    'http://datartisan.com',
		    'GET'
		);

		echo $request->getStatusCode();
		echo $request->getContent();

		//dd($request);
	}

}
