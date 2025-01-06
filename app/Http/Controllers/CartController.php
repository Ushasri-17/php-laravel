<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;


class CartController extends Controller
{
    public function cart()
    {
        $cartItems = Cart::where('user_id', auth()->id())
            ->with('product') // Eager load the product
            ->get();

        return view('cart', compact('cartItems'));
    }
}