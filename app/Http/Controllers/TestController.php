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
		// // test email auth
		// $client = new Client();

		// $response = $client->get( 'http://mbox.datartisan.com/', [
		// 	//'future' => true,
		// 	'cookies' => true,
		// 	'headers' => [
		// 		'User-Agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.101 Safari/537.36',
		// 	],
		// ]);

  //   	$response = $client->post( 'http://mbox.datartisan.com/', [
  //   		'cookies' => true,
  //   		'verify' => false,
		// 	'headers' => [
		// 		'User-Agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.101 Safari/537.36',
		// 	],
		// 	'body' => [
		// 		'username' => '',
		// 		'domain' => 'datartisan.com',
		// 		'password' => '',
		// 		'ssl' => 'on',
		//     ],
		// ]);

  //   	echo $response->getEffectiveUrl(); // we need 'http://mbox.datartisan.com/mail.php'
  //   	echo $response->getBody();

  //   	dd($response);


		//echo getenv('PATH');

		echo \Request::path();
	}

}
