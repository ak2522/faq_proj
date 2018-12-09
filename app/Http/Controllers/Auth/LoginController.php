<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\User;
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
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();

    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        //dd($user);
        //return $user->name;
        //return $user->avatar;

       $find_user = User::where('email', $user->getEmail())->first();

       if ($find_user) {
           Auth::login($find_user);}
       else {
//add user to database
           $new_user = new User;
           $new_user->email = $user->getEmail();
           $new_user->provider_id = $user->getId();
           $new_user->name = $user->getName();
           $new_user->avatar = $user->getAvatar();
           $new_user->save();
           Auth::login($new_user);
       }

        //login the user
        //return redirect($this->redirectTo);
        return redirect('home');

    }


}
