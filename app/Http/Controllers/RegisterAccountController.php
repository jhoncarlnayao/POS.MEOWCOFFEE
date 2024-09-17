<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAccount;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterAccountController extends Controller
{


    public function register(Request $request)
    {
      
        $request->validate([
            'Email' => 'required|string|max:255',
            'Username' => 'required|string|max:255|unique:_user_accounts', 
            'password' => 'required|string|min:5|confirmed', 
        ]);
    
        $User = UserAccount::create([
            'Email' => $request->Email,
            'Username' => $request->Username,
           'password' => Hash::make($request->password),
        ]);
    
        // Ensure you have a method for user authentication or remove this line if unnecessary
        // UserAccount::attempt($request->only('Username', 'Password'));
        // Auth::login(UserAccount::where('Username', $request->Username)->first());
        Auth::login($User);
        return redirect()->route('login.page'); 
    }
    
    
}
