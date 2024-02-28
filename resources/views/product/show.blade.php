@extends('layouts.app')

@section('content')

<div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15">
    <div class="mx md:mx-0">
        <img class="sm:rounded-lg" src="{{ asset('images/'.$product['photo']) }}" width="493px" alt="">
    </div>

    <div class="flex flex-col items-left justify-center m-10 sm:m-0">
        <h2 class="font-bold text-gray-700 text-3xl uppercase mb-2">{{ $product['name'] }}</h2>
        <h2 class="font-bold text-gray-700 text-2xl uppercase mb-2">{{ $product['title'] }}</h2>
        <p class="font-bold text-gray-700 text-1xl mb-2 leading-5">{{ $product['description'] }}</p>
        <p class="font-bold text-red-600 text-1xl mb-2 leading-5">{{ $product['price'] }} DH</p>
        @if ($product['stock'] > 0)
        <p>STOCK: {{ $product['stock'] }}</p>

        <form action="{{ route('carta.add') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product['id'] }}">
            <div class="px-6 pt-10 text-right">
            <input type="number" name="quantity" value="1" min="1" max="{{ $product['stock'] }}" class="mr-2 px-2 py-1 border border-gray-300 rounded">
                <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-6 rounded-lg">
                    <span class="text-xl">ADD TO CART</span>
                </button>
            </div>
        </form>
        @else
        <p class="text-red-600">Out of stock</p>
        @endif

    </div>
</div>

<div class="pt-8">
    @include('slider')
</div>

@endsection
