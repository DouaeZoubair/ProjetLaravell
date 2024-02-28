@extends('layouts.app')

@section('content')

<style>
.card {
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
}

.card:hover {
    transform: scale(1.05);
}

.card-image img {
    width: 100%;
    height: auto;
}

.card-content {
    padding: 20px;
    background-color: #f8f8f8;
}

.card-title {
    font-weight: bold;
    font-size: 24px;
    margin-bottom: 10px;
}

.card-subtitle {
    font-weight: bold;
    font-size: 20px;
    margin-bottom: 10px;
    color: #888;
}

.card-price {
    font-weight: bold;
    font-size: 18px;
    color: #e74c3c;
    margin-bottom: 10px;
}

.card-actions {
    padding: 10px;
    text-align: right;
}

.btn {
    display: inline-block;
    background-color: #e74c3c; /* Changed to red color */
    color: #fff;
    font-weight: bold;
    padding: 10px 20px;
    border-radius: 4px;
    text-decoration: none;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #c0392b; /* Darker red color on hover */
}



</style>
<div>

    @if (count($products) > 0)

    <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-5">
    @foreach ($products as $product)
    <div class="card">
    <div class="card-image">
        <img src="{{ asset('images/'.$product['photo']) }}" alt="Image" class="img-fluid">
    </div>
    <div class="card-content">
        <h2 class="card-title">{{ $product['name'] }}</h2>
        <h3 class="card-subtitle">{{ $product['title'] }}</h3>
        <div class="card-price">Price: {{ $product['price'] }} DH</div>
    </div>
    <div class="card-actions">
        <a href="{{ route('product.show',['product'=>$product['id']]) }}" class="btn btn-primary">VIEW MORE</a>
    </div>
</div>



    @endforeach
</div>


    @else
    <h1 class="text-black-600 text-3xl uppercase font-bold pt-20 pb-10 text-center">THERE IS NOT PRODUCT FOR DISPLAY</h1>
    @endif

</div>

@endsection
