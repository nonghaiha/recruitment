<?php

namespace Core\Modules\Admin\Controllers\Auth;

use App\Http\Controllers\Controller;
use Core\Modules\Admin\Requests\LoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Cms\Modules\Core\Services\Contracts\UserServiceContract;
use Illuminate\Support\Facades\Auth;
use Zizaco\Entrust\Entrust;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('Admin::login.index');
    }

    public function login(LoginRequest $request)
    {
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }
        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }
    protected function authenticated(Request $request, $user)
    {
        if ($user->hasRole('admin')) {
            return redirect()->route('admin.home');
        } else {
            $this->redirectTo = route('client.home');;
            return redirect($this->redirectTo);
        }
    }

    public function logout(Request $request)
    {
        
        $this->guard()->logout();
        
        $request->session()->flush();
        
        return $this->loggedOut($request) ?: redirect()->route('admin.showLogin');
    }

}
