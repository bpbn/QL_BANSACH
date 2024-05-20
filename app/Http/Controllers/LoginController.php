<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showForm()
    {
        return view('pages.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not math our records.',
        ])->onlyInput('email');
    }
    /**
     * Log the user out of the application.
     *@param
     *@return
     */

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function register()
    {
        return view('pages.register');
    }

    public function postregister(Request $req)
    {
        $req->merge(['password' => Hash::make($req->password)]);
        try {
            User::create($req->all());
        } catch (\Throwable $th) {
            dd($th);
        }
        return redirect()->route('login');
    }
}
