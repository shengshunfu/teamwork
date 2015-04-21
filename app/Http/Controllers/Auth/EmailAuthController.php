<?php namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Auth;
use Hash;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class EmailAuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Email Auth Controller
	|--------------------------------------------------------------------------
	|
	|
	*/

	/**
	 * Create a new authentication controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest', ['except' => 'getLogout']);
        $this->middleware('csrf');

		$this->mboxUrl = 'http://mbox.datartisan.com/';
		$this->userAgent = 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.101 Safari/537.36';
		$this->checkUrl = 'http://mbox.datartisan.com/mail.php';
	}

	/**
	 * Display the form to request a password reset link.
	 *
	 * @return Response
	 */
	public function getLogin()
	{
		return view('user.login');
	}

	/**
	 * 
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function postLogin(Request $request)
	{

		$this->validate($request, [
			'username' => 'required',
			'password' => 'required',
		]);

		$credentials = $request->only('username', 'password');

        $user = User::whereName($credentials['username'])->first();

        if (!$user) {
            // no user, email auth, create

            $client = new Client();

            // get cookie
            $client->get( $this->mboxUrl, [
                'cookies' => true,
                'headers' => [
                    'User-Agent' => $this->userAgent,
                ],
            ]);

            // check 
            $response = $client->post( $this->mboxUrl, [
                'cookies' => true,
                'verify' => false,
                'headers' => [
                    'User-Agent' => $this->userAgent,
                ],
                'body' => [
                    'username' => $credentials['username'],
                    'domain' => 'datartisan.com',
                    'password' => $credentials['password'],
                    'ssl' => 'on',
                ],
            ]);

            if($response->getEffectiveUrl() == $this->checkUrl){
                // auth success

                $user = User::create([
                    'name' => $credentials['username'],
                    'email' => $credentials['username'].'@datartisan.com',
                    'password'=> bcrypt($credentials['password']),
                ]);

                Auth::login($user);
                return redirect('/');
            }
            
        }
        else {
            // check local password
            if (Hash::check($credentials['password'], $user->password)) {
                Auth::login($user);
                return redirect('/');
            }
        }

    	return redirect()->back()->withErrors(['msg' => '用户名或密码错误']);
	}


    /**
     * Logout
     *
     * @return Response
     */
    public function getLogout()
    {
        Auth::logout();
        return redirect('user/login');
    }
}
