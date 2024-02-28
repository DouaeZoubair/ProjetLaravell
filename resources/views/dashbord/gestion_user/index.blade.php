@extends('dashbord.index')

@section('product')

<div class="p-5">

    <div>
        
    </div>

    @if ($users->count() > 0)
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        User name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Address
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Gender
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date of birth
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Phone
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
            @foreach ($users as $user)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $user->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $user->email }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->adress }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->gender }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->date_born }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->phone }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('gestion_user.edit', $user->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <img src="{{ url('images/reload.png') }}" alt="Edit Image" class="img-fluid" width="50px" height="40px">
                        </a>
                    </td>
                    <td class="px-6 py-4">
                        <form action="{{ route('gestion_user.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this user?')">
                                <img src="{{ url('images/multiply.png') }}" alt="Delete Image" class="img-fluid" width="50px" height="40px">
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

    <!-- Add pagination links -->
    <div class="mt-4 px-6 py-3">
        {{ $users->links() }}
    </div>

    <div class="flex justify-end mt-4 px-6 py-3">
        <span class="mr-2">Records per page:</span>
        <a href="{{ route('gestion_user.index', ['perPage' => 5]) }}" class="px-2 py-1 border border-gray-300 rounded hover:bg-gray-200">5</a>
        <a href="{{ route('gestion_user.index', ['perPage' => 10]) }}" class="px-2 py-1 border border-gray-300 rounded hover:bg-gray-200">10</a>
        <a href="{{ route('gestion_user.index', ['perPage' => 20]) }}" class="px-2 py-1 border border-gray-300 rounded hover:bg-gray-200">20</a>
    </div>

    @else
    <h1 class="text-black-600 text-3xl uppercase font-bold pb-10 text-center">THERE ARE NO USERS TO DISPLAY</h1>
    @endif

</div>

@endsection
