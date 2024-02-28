@extends('layouts.app')

@section('content')

<div class="p-5">
@if ($cart>0)
<form action="{{ route('gestion_order.store') }}" method="POST">
    @csrf
        <button type="submit" class="text-red-600 text-l uppercase font-bold it mb-8">Buy</button>
  </form>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">

        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Quantity
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Picture
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Delete
                    </th>
                </tr>
            </thead>
            <tbody>
            @foreach ($cart as $product)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $product['name']   }}
                    </th>
                    <td class="px-6 py-4">{{ $product['title'] }}</td>
                    <td class="px-6 py-4">{{ $product['quantity'] }}</td>
                    <td class="px-6 py-4">{{ $product['quantity'] * $product['price'] }} DH</td>

                    <td class="px-6 py-4">
                        <img src="{{ asset('images/'.$product['image']) }}" alt="Image " class="img-fluid" width="100px" height="50px">
                    </td>
                    <td>
                        <form action="{{ route('carta.remove', $product['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure you want to delete this product?')"><img src="{{ url('images/multiply.png') }}" alt="Delete Image" class="img-fluid" width="50px" height="40px"></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@else
<h1 class="text-black-600 text-3xl uppercase font-bold pb-10 text-center">Your cart is empty</h1>
    
@endif
</div>

@endsection