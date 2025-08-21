@extends('layout')

@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold">Categories List</h2>
        <a href="{{ route('categories.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
            + Add Category
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full bg-white shadow-md rounded mb-6">
        <thead>
            <tr class="bg-gray-100 text-left">
                <th class="py-2 px-4">ID</th>
                <th class="py-2 px-4">Name</th>
                <th class="py-2 px-4">Slug</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $cat)
            <tr class="border-t">
                <td class="py-2 px-4">{{ $cat->id }}</td>
                <td class="py-2 px-4">{{ $cat->name }}</td>
                <td class="py-2 px-4">{{ $cat->slug }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        {{ $categories->links() }}
    </div>
</div>
@endsection
