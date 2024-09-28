<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $user = Auth::user();

        UserCart::create([
            'user_id' => $user->id,
            'username' => $user->Username,
            'item_name' => $request->input('item_name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
        ]);

        return response()->json(['message' => 'Item added to cart']);
    }

    public function viewCart()
    {
        $user = Auth::user();
        $cartItems = UserCart::where('user_id', $user->id)->get();


        return view('view', compact('cartItems'));
    }

    
}
