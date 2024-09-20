<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\UserAccount;

class UpdateAccount extends Controller
{
    public function updateAccount(Request $request)
    {
        $request->validate([
            'updateUsername' => 'required|string|max:255|unique:_user_accounts,Username,' . Auth::id(),
            'updateEmail' => 'required|string|max:255|unique:_user_accounts,Email,' . Auth::id(),
            // 'updatePassword' => 'required|string|max:20,password',
        ]);

        
        $user = UserAccount::find(Auth::id());      
            $user->Username = $request->updateUsername; 
            $user->Email = $request->updateEmail;
            // $user->assword = $request->updatePasswprd;
            $user->save();
        

        return redirect()->back()->with('Error', 'User not found');
    }
}

