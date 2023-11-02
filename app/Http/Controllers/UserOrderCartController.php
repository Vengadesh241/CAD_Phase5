<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserOrderCartController extends Controller
{
    function AddToCart($id) {        
        $product = Product::find($id);
        $user_id = Auth::user()->id;

        Cart::create([
            'user_id' => $user_id,
            'product_id'=> $product->id,
            'product_name' => $product->name,
            'product_price' => $product->price,
        ]);

        return back();
    }

    function CheckOut() {
        $user_id = Auth::user()->id;
        $carts = Cart::where('user_id', Auth::user()->id)->select('user_id', 'product_id', 'product_name', 'product_price')->get();
       
        $array = json_decode($carts, true);
        DB::table('orders')->insert($array);
        Cart::where('user_id', Auth::user()->id)->delete();
        return redirect('/home');
    }
}
