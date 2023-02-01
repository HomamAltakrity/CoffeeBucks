@extends('details_layout')
@section('content')
@include('partials._hero')

<div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
        Upload a Product
    </h2>
</header>

<form method="POST" action="/coffeebucks/public/products" enctype="multipart/form-data">
    @csrf
    <div class="mb-6">
        <label
            for="name"
            class="inline-block text-lg mb-2">Product Name</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="name"
            value="{{old('name')}}"
        />
        @error('name')
        <p class="text-red-500 text-xs mt-1">{{messages}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="origin" class="inline-block text-lg mb-2">Location</label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="origin"
            placeholder="Example: Brazil"
            value="{{old('origin')}}"
        />
        @error('origin')
        <p class="text-red-500 text-xs mt-1">{{messages}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label
            for="price"
            class="inline-block text-lg mb-2">Price</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="price"
            placeholder="Example: 100$"
            value="{{old('price')}}"
        />
        @error('price')
            <p class="text-red-500 text-xs mt-1">{{messages}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="photo" class="inline-block text-lg mb-2">
            Product Photo
        </label>
        <input
            type="file"
            class="border border-gray-200 rounded p-2 w-full"
            name="photo"
        />
        <br><br>
        @error('photo')
            <p class="text-red-500 text-xs mt-1">{{messages}}</p>
        @enderror
        
    <div class="mb-6">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
            Upload Product
        </button>

        <a href="/coffeebucks/public/" class="text-black ml-4"> Back </a>
    </div>
</form>
</div>
@endsection
