@extends('layout')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h2 class="text-2xl font-bold mb-6">Add New Category</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

   
    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

<form action="{{ route('categories.store') }}" method="POST" class="bg-white p-6 rounded shadow-md max-w-md mx-auto">
    @csrf
    <div class="mb-4">
        <label for="name" class="block font-medium text-gray-700">Category Name</label>
        <input type="text" name="name" id="name"
               value="{{ old('name') }}"
               class="mt-1 block w-full h-12 border-gray-300 rounded-md shadow-lg px-3 focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="slug" class="block font-medium text-gray-700">Slug</label>
        <input type="text" name="slug" id="slug"
               value="{{ old('slug') }}"
               class="mt-1 block w-full h-12 border-gray-300 rounded-md shadow-lg px-3 focus:ring-blue-500 focus:border-blue-500">
    </div>

    <button type="submit"
            class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 transition">
        Save Category
    </button>
</form>


</div>
@endsection
