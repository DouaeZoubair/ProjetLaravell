<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
class Product_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perPage = $request->input('perPage', 5); // Get the number of records per page from the request, default is 5
    
        $products = Product::paginate($perPage); // Paginate the products with the specified number of records per page
    
        return view('dashbord.gestion_product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashbord.gestion_product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       dd($validate);

        $product = new Product();

        $product->name = $request->input('name_product');
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->stock = $request->input('product_stock');
        $product->category = $request->input('category');
        $product->price = $request->input('product_price');

        $product->photo = $request->file('product_picture')->getClientOriginalName();


        $product->save();
        $request->file('product_picture')->move(public_path('images'), $request->file('product_picture')->getClientOriginalName());
        return redirect()->route('gestion_product.create');
        

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
    public function edit($product)
    {
        return view(
            'dashbord.gestion_product.edit',
            ['product' => Product::findOrFail($product)]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product)
    {
        $to_update = Product::findOrFail($product);

        

        $to_update->name = $request->input('name_product');
        $to_update->description = $request->input('description');
        $to_update->stock = $request->input('product_stock');
        $to_update->category = $request->input('category');
        $to_update->price = $request->input('product_price');

        $to_update->photo = $request->file('product_picture')->getClientOriginalName();
        $request->file('product_picture')->move(public_path('images'), $request->file('product_picture')->getClientOriginalName());

        $to_update->save();
        
        return redirect()->route('gestion_product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        $to_delete = Product::findOrFail($product);
        $to_delete->delete();
        return redirect()->route('gestion_product.index');
    }
}
