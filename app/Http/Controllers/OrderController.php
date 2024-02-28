<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perPage = 5; // Set the default number of items per page
    
        if ($request->has('perPage')) {
            $perPage = $request->perPage; // Get the desired number of items per page from the request
        }
    
        $orders = Order::paginate($perPage); // Paginate the results with the specified number of items per page
    
        return view('dashbord.gestion_order.index', compact('orders'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    if (Auth::check()) {
        $user_id = Auth::user()->id;
        $cart = session()->get('cart');
        if (!$cart) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }
        foreach ($cart as $product){
        $order = new Order();
        $order->user_id = $user_id;
        $order->product_id = $product['id'];
        $order->date = Carbon::now();
        $order->quantity = $product['quantity'];
        $order->price = $product['price']*$product['quantity'];
        $order->story = "NOT DONE";
        $order->adress_delevry = Auth::user()->adress;
        $order->save();

        $productModel = Product::find($product['id']);
        $productModel->stock = $productModel->stock - $product['quantity'];
        $productModel->save();
        }
        
        session()->forget('cart');

        return redirect()->route('index')->with('success', 'Order placed successfully.');
    } else {
        return redirect()->route('login');
    }
}

    
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $order)
    {
        $to_update = Order::findOrFail($order);

        $to_update->story = "DONE";

        $to_update->save();
        
        return redirect()->route('gestion_order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($order)
    {
        $to_delete = Order::findOrFail($order);
        $to_delete->delete();
        return redirect()->route('gestion_order.index');
    }



}
