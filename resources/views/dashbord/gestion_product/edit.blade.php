@extends('dashbord.index')

@section('product')


<div class="p-10">

<form action="{{route('gestion_product.update', ['gestion_product' => $product->id] )}}" enctype="multipart/form-data" method="POST" >
@csrf
@method('PUT')
  <div class="relative z-0 w-full mb-6 group">
      <input type="text" name="name_product" id="name_product" value="{{$product->name}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
      <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Product Name</label>
  </div>
  <div class="relative z-0 w-full mb-6 group">
        <textarea type="text" name="description" id="description"   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required >{{$product->description}}</textarea>
        <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
  </div>

  <div class="grid md:grid-cols-3 md:gap-6">
    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="product_stock" id="product_stock" value="{{$product->stock}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Stock</label>
    </div>
    <div class="relative z-0 w-full mb-6 group">
    <label for="underline_select" class="sr-only">Category</label>
        <select name="category" id="underline_select" value="{{$product->category}}" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
            <option selected value="pc_gamer_intel">PC Gamer Intel</option>
            <option value="pc_gamer_ryzen">PC Gamer Ryzen</option>
            <option value="pc_portable">Pc Portable</option>
            <option value="motherboard">Motherboard</option>
            <option value="Processor_intel">Processor Intel</option>
            <option value="Processor_ryzen">Processor Ryzen</option>
            <option value="storage_ssd">Storage SSD</option>
            <option value="storage_hdd">Storage HDD</option>
            <option value="ram">RAM</option>
            <option value="carte_graphic_gt">Graphic card GT</option>
            <option value="carte_graphic_gtx">Graphic card GTX</option>
            <option value="carte_graphic_rtx">Graphic card RTX </option>
            <option value="carte_graphic_rx">Graphic card Radeon RX</option>
            <option value="gaming_box">gaming box</option>
            <option value="power_supply">power supplies</option>
            <option value="aircooler">AirCooler</option>
            <option value="screens">screens and editors</option>
            <option value="accessorie">Accessories</option>
            <option value="gaming_chairs_desk">gaming chairs & desk</option>
        </select>
    </div>
    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="product_price" id="floating_last_name" value="{{$product->price}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Price</label>
    </div>
  </div>

  
<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload picture</label>
<input value="{{$product->photo}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" aria-describedby="user_avatar_help" id="product_picture" name="product_picture" type="file">


  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-10">UPDATE</button>
</form>

</div>

@endsection