<?php

namespace App\Http\Controllers\Auth;

use App\Models\Buyer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/teste';

    protected $username = 'name';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authLogin(Request $request){
        $cred = $request->only("name", "password");
        error_log(json_encode($cred));
        error_log(json_encode($request));
        $this->login($request);
    }

    public function getBuyer(){
        $byr = $request->buyer();

        error_log($byr);

        return $byr; 
    }


    public function home() {
        return redirect('/login');
    }

}
