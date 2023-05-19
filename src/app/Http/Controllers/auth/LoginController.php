<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function login(Request $request) {
        // dd($request->all());
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // dd($credentials);
        $user = User::where('email', $credentials['email'])->first();
        // dd($user);

        if ($user && $user->password == $credentials['password']) {
            Auth::login($user);
            return redirect()->route('index');
        } else {
            dd("error");
        }

        // if (Auth::attempt($credentials)) {
        //     // return redirect()->intended(route('index'));
        //     return redirect()->route('index');
        // } else {
        //     dd("error");
        // }
    }
}
