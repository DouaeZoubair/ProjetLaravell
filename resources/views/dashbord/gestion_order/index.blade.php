@extends('dashbord.index')

@section('product')

<div class="p-5">

    <div>

    </div>

    @if ($orders->count() > 0)
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        User name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Quantity
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Address
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Phone user
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Product picture
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Story
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Confirm Story
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Delete
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $order->user->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $order->product->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $order->quantity }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $order->price }} DH
                    </td>
                    <td class="px-6 py-4">
                        {{ $order->date }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $order->adress_delevry }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $order->user->phone }}
                    </td>
                    <td class="px-6 py-4">
                        <img src="{{ asset('images/'.$order->product->photo) }}" alt="Image " class="img-fluid" width="100px" height="50px">
                    </td>
                    <td class="px-6 py-4">
                        {{ $order->story }}
                    </td>
                    <td class="px-6 py-4">
                        <form action="{{ route('gestion_order.update', ['order' => $order->id]) }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('PUT')
                            <button><img src="{{ url('images/done1.png') }}" alt="Image" class="img-fluid" width="50px" height="40px"></button>
                        </form>
                    </td>
                    <td class="px-6 py-4">
                        <form action="{{ route('gestion_order.destroy', ['order' => $order->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this order?')"><img src="{{ url('images/multiply.png') }}" alt="Image" class="img-fluid" width="50px" height="40px"></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Add pagination links -->
        <div class="mt-4 px-6 py-3">
            {{ $orders->links() }}
        </div>

        <div class="flex justify-end mt-4 px-6 py-3">
    <span class="mr-2">Records per page:</span>
    <a href="{{ route('gestion_order.index', ['perPage' => 5]) }}" class="px-2 py-1 border border-gray-300 rounded hover:bg-gray-200">5</a>
<a href="{{ route('gestion_order.index', ['perPage' => 10]) }}" class="px-2 py-1 border border-gray-300 rounded hover:bg-gray-200">10</a>
<a href="{{ route('gestion_order.index', ['perPage' => 20]) }}" class="px-2 py-1 border border-gray-300 rounded hover:bg-gray-200">20</a>

</div>

    </div>
    @else
    <h1 class="text-black-600 text-3xl uppercase font-bold pb-10 text-center">THERE ARE NO ORDERS TO DISPLAY</h1>
    @endif

</div>

@endsection
