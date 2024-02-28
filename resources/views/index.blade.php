@extends('layouts.app')

@section('content')




  <div class="hero-bg-image flex flex-col items-center justify-center">
    <h1 class="text-gray-100 text-5xl uppercase font-bold pb-10 text-center">WELCOME TO SETUP GAME</h1>
    <h2 class="text-gray-900 text-xl uppercase font-bold it">It'is your world</h2>
  </div>



  <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15">
    <div class="mx md:mx-0">
    <img class=" sm:rounded-lg" src="https://images.unsplash.com/photo-1544652478-6653e09f18a2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
    </div>

    <div class="flex flex-col items-left justify-center m-10 sm:m-0">
      <h2 class="font-bold text-gray-700 text-3xl uppercase mb-2">About Us</h2>
      
      <p class="font-bold text-gray-600 text-sm mb-1 leading-5">DO NOT THINK TWICE, WE ARE NUMBER ONE IN MOROCCO </p>
      <p class=" text-gray-500 text-sm pt-2 leading-5">Setup Game is Morocco's premier shop for gaming PC components, 
        providing quality products at affordable prices.  Choose Setup Game for all your gaming component needs and 
        experience the best products and services available in the country.
      </p>
    </div>
  </div>



  <div class="text-center p-15 bg-gray-700 text-gray-100">
    <h2>Blog Categories</h2>
    <div class="container mx-auto pt-10 sm:grid grid-cols-4">
        <div class="font-bold text-3xl py-2">Money-Back Guarantee</div>
        <div class="font-bold text-3xl py-2">24/7 Customer Support</div>
        <div class="font-bold text-3xl py-2">Cash On Delivery</div>
        <div class="font-bold text-3xl py-2">Shop The Best Deals Online</div>
    </div>
  </div>



  <div class="container mx-auto text-center py-15">
    <h2 class="font-bold text-5xl py-10">SETUP GAME</h2>

    <p class="text-gray-400 leading-6 px-10">
    Setup Game is a brand that caters to the needs of the gaming community 
    by providing top-quality products and services. 
    With an emphasis on delivering an exceptional 
    gaming experience, Setup Game offers a range of solutions that help 
    customers achieve their gaming goals. 
    Whether you're looking to upgrade your 
    system's performance or build a new gaming rig from scratch, 
    Setup Game has everything you need to get started. 
    From high-performance graphics cards to lightning-fast SSDs, 
    Setup Game's products are designed to meet the demands of even the most 
    demanding gamers. With a focus on affordability and reliability, 
    Setup Game is the go-to brand for gamers who want to take their 
    gaming experience to the next level.
    </p>
    <div class="flex justify-center items-center pt-5">
    <img class=" " src="https://www.pcworld.com/wp-content/uploads/2021/11/IMG_20190615_214330-2.jpg?resize=1024%2C657&quality=50&strip=all" alt="">
    </div>
  </div>

  <div>
      @include('slider')
  </div>



@endsection