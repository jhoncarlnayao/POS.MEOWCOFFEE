<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\UserAccount;
use Illuminate\Support\Facades\Hash;


class LoginAccountController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'Username' => 'required|string',
            'password' => 'required|string',
        ]);
    
        $user = UserAccount::where('Username', $credentials['Username'])->first();
    
        if ($user && Hash::check($credentials['password'], $user->Password)) {
            Auth::login($user);
            return redirect()->intended('dashboard');
        } else {
            Log::info('Login attempt failed', ['credentials' => $credentials]);
            return back()->withErrors([
                'Username' => 'The provided credentials do not match our records.',
            ]);
        }
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('login.page');
    }

    public function profile(){
        return view('user.profile');
    }
}

