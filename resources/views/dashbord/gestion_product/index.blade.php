@extends('dashbord.index')

@section('product')

<div class="p-5">

        <form action="/import" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file">
            <button type="submit" class="text-gray-900 text-l  font-bold it mb-8 ml-3 p-2">Importer</button>
        </form> <br><br><br>


    <div>
        <a href="{{ route('gestion_product.create') }}" class="text-gray-900 text-l uppercase font-bold it mb-8">Add product</a>
    </div>

    @if ($products->count() > 0)
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
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Stock
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Picture
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Edit
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Delete
                    </th>
                </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $product['name'] }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $product['title'] }}
                    </td>
                    <td class="px-6 py-4">
                        <div style="max-height: 150px; overflow-y: scroll;">
                            {{ $product['description'] }}
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        {{ $product['stock'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $product['category'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $product['price'] }} DH
                    </td>
                    <td class="px-6 py-4">
                        <img src="{{ asset('images/'.$product['photo']) }}" alt="Image " class="img-fluid" width="100px" height="50px">
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('gestion_product.edit', $product['id']) }}" class="text-indigo-600 hover:text-indigo-900"><img src="{{ url('images/reload.png') }}" alt="Edit Image" class="img-fluid" width="50px" height="40px"></a>
                    </td>
                    <td class="px-6 py-4">
                        <form action="{{ route('gestion_product.destroy', $product['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure you want to delete this product?')"><img src="{{ url('images/multiply.png') }}" alt="Delete Image" class="img-fluid" width="50px" height="40px"></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <!-- Add pagination links -->
        <div class="mt-4 px-6 py-3">
            {{ $products->links() }}
        </div>

        <div class="flex justify-end mt-4 px-6 py-3">
            <span class="mr-2">Records per page:</span>
            <a href="{{ route('gestion_product.index', ['perPage' => 5]) }}" class="px-2 py-1 border border-gray-300 rounded hover:bg-gray-200">5</a>
            <a href="{{ route('gestion_product.index', ['perPage' => 10]) }}" class="px-2 py-1 border border-gray-300 rounded hover:bg-gray-200">10</a>
            <a href="{{ route('gestion_product.index', ['perPage' => 20]) }}" class="px-2 py-1 border border-gray-300 rounded hover:bg-gray-200">20</a>
            <a href="{{ route('gestion_product.export') }}" class="px-2 py-1 border border-gray-300 rounded hover:bg-gray-200">Export Product</a>
        </div>

    </div>
    @else
    <h1 class="text-black-600 text-3xl uppercase font-bold pb-10 text-center">THERE IS NO PRODUCT TO DISPLAY</h1>
    @endif

</div>

@endsection
