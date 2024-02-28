<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{

    public function index()
    {
        $cart = session()->get('cart');
        return view('carta.index', compact('cart'));
    }
    




    public function addProduct(Request $request)
    {
        $product = Product::find($request->input('product_id'));
    
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }
    
        $quantity = $request->input('quantity');
    
        $cart = session()->get('cart');
    
        // If the cart is empty, initialize it
        if (!$cart) {
            $cart = [];
        }
    
        // If the product already exists in the cart, increment the quantity
        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] += $quantity;
        } else {
            // If the product doesn't exist in the cart, add it
            $cart[$product->id] = [
                'id' => $product->id,
                'name' => $product->name,
                'title' => $product->title,
                'image' => $product->photo,
                'description' => $product->description,
                'price' => $product->price,
                'quantity' => $quantity,
            ];
        }
    
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart.');
    }
    



    public function removeProduct($id)
{
    $cart = session()->get('cart');

    if (isset($cart[$id])) {
        unset($cart[$id]);
        session()->put('cart', $cart);
    }

    return redirect()->back()->with('success', 'Product removed from cart.');
}

    
    
}
