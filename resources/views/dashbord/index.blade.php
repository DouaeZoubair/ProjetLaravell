@extends('layouts.app')

@section('content')

<style>
    .navbar_dashbord{
        height:7vh;
        display:flex;
        justify-content:space-evenly;
        align-items:center;
    }
</style>

<div class="navbar_dashbord">
    <a class="font-bold text-xl py-2 text-red-600" href="{{route('gestion_product.index')}}">PRODUCT</a>

    <a class="font-bold text-xl py-2 text-red-600" href="{{route('gestion_order.index')}}">ORDERS</a>

    <a class="font-bold text-xl py-2 text-red-600" href="{{route('gestion_user.index')}}">USERS</a>
</div>


        <div>
            @yield('product')
        </div>




@endsection