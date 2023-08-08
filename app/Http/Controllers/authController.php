<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class authController extends Controller
{

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function register(Request $request)
    {


        $validate = Validator::make($request->all(), [
            'username' => 'required|unique:users|max:15',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);
        if ($validate->fails()) {
            return back()->withErrors($validate);
        }

        $input = $request->except(['_token']);

        $input['password'] = bcrypt($input['password']);
        $user = User::create([
            'username' => $input['username'],
            'email' => $input['email'],
            'password' => $input['password'],
        ]);
        Auth::login($user);
        $success['token'] = $user->createToken('token')->plainTextToken;
        $success['user_name'] = $user->user_name;




        return redirect()->route('home');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember == 'on')) {
            $user = Auth::user();
            Auth::login($user);

            $request->session()->regenerate();

            return redirect()->route('home');
        } else {
            return redirect()->route('login')->with('error', 'Invalid Login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
