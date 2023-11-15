<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="table-responsive">
                <table class="min-w-full divide-y divide-gray-200 shadow-sm rounded-lg overflow-hidden">
                    <thead class="bg-blue-200">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">ID</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Role</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Name</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Email</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Created At</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @php
                        $i=1;
                        @endphp

                        @foreach ($users as $user)
                        <tr>
                            <th scope="row" class="px-6 py-4 whitespace-nowrap">{{$i++}}</th>
                            <td class="px-6 py-4 whitespace-nowrap">{{$user->role}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$user->name}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$user->email}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$user->created_at}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('users.edit', $user->id) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2">Edit</a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</x-app-layout>
