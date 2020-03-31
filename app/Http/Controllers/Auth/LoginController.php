<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use DB;
use Session;

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

    use AuthenticatesUsers {
    logout as performLogout;
}

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo()
    {
        $role = Auth::user()->role;
        $users = DB::table('roles')
             
             ->join('role_has_permissions as roleper', 'roles.id', '=', 'roleper.role_id')
             ->join('permissions', 'permissions.id', '=', 'roleper.permission_id')
             ->join('users', 'users.role', '=' , 'roles.name')
             ->where('users.id', '=', Auth::user()->id )
             ->select('permissions.name')
           
            ->get();

            // $request->session()->push('users', $users);
            Session::put('users', $users);
            // session($users);



        return ($role == 'master')?'/masters':'/home';
    }

    public function username()
    {
        $login = request()->input('email');
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone_number';
        request()->merge([$field => $login]);
        return $field;
    }

    public function credentials(Request $request)
    {
        $credentials = $request->only($this->username(), 'password');
        $credentials = array_add($credentials, 'active', '1');
        return $credentials;
    }
    public function logout(Request $request)
    {
       $this->performLogout($request);
    return redirect()->route('home');
    }
}
